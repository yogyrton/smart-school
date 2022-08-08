<template>
    <div>
        <div>
            <form
                v-if="!registrationPassed"
                class="sign-up"
                @submit.prevent="checkForm">

                <div class="form-group mb-12">
                    <label for="name">Представьтесь*</label>
                    <input
                        id="name"
                        class="form-control w-100"
                        :placeholder="windowWidth > 767 ? 'Введите Ваше имя' : 'Имя'"
                        :class="$v.form.name.$error ? 'is-invalid' : ''"
                        v-model.trim="form.name"
                    />
                    <p
                        v-if="
                                    $v.form.name.$dirty &&
                                    !$v.form.name.required
                                "
                        class="invalid-feedback"
                    >
                        Обязательное поле
                    </p>
                    <p
                        v-if="
                                    $v.form.name.$dirty &&
                                    !$v.form.name.minLength
                                "
                        class="invalid-feedback"
                    >
                        Здесь должно быть больше 2-х символов
                    </p>
                </div>
                <div class="form-group mb-12">
                    <label for="name">Телефон*</label>
                    <input
                        id="phone"
                        type="text"
                        class="form-control w-100"
                        placeholder="Введите номер телефона"
                        :class="$v.form.phone.$error ? 'is-invalid' : ''"
                        v-model.trim="form.phone"/>
                    <p v-if="$v.form.name.$dirty && !$v.form.phone.required" class="invalid-feedback">
                        Обязательное поле
                    </p>
                </div>

                <div class="form_btn">
                    <button type="submit" class="btn-purple button_2 w-100">Отправить</button>
                </div>

            </form>
            <div v-else>
                <h1>
                    {{ `${form.name}. Спасибо, Ваша заявка успешно отправлена!` }}
                </h1>
            </div>
        </div>
    </div>
</template>

<script>
    import {required, minLength} from "vuelidate/lib/validators";
    import {validationMixin} from "vuelidate";
    import Multiselect from "vue-multiselect";

    export default {
        components: {
            Multiselect,
        },
        mixins: [validationMixin],
        data() {
            return {
                windowWidth: null,
                registrationPassed: false,
                form: {
                    name: null,
                    phone: null,
                }
            };
        },
        validations: {
            form: {
                name: {required, minLength: minLength(2)},
                phone: {required, minLength: minLength(10)},
            },
        },
        created() {
            this.handleWindowResize();
            window.addEventListener('resize', this.handleWindowResize);
        },
        methods: {
            checkForm() {
                this.$v.form.$touch();
                if (!this.$v.form.$error) {
                    axios.post('https://smart.ilavista.tech/api/mail', {
                        name: this.form.name,
                        phone: this.form.phone,
                        page: this.page
                    })
                        .then(response => {
                            if(response) {
                                $('#requestModal').modal('hide');
                                Swal.fire({
                                    allowEscapeKey: false,
                                    title: 'Спасибо, Ваша заявка успешно отправлена!',
                                    icon: 'error',
                                    confirmButtonText: 'На главную',
                                    customClass: {
                                        container: 'full-height-swall'
                                    }
                                })
                                    .then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href='/'
                                        }
                                    });
                            }
                        })

                }
            },
            handleWindowResize() {
                this.windowWidth = window.innerWidth;
            }
        },
    };
</script>

