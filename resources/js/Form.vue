<template>
    <div>
        <div>
            <form class="sign-up" @submit.prevent="checkForm">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-12">
                            <label for="name">Представьтесь*</label>
                            <input
                                id="name"
                                class="form-control w-100"
                                :placeholder="windowWidth > 767 ? 'Введите Ваше имя' : 'Имя'"
                                :class="$v.form.name.$error ? 'is-invalid' : ''"
                                v-model.trim="form.name"/>
                            <p v-if=" $v.form.name.$dirty &&!$v.form.name.required" class="invalid-feedback">
                                Обязательное поле
                            </p>
                            <p v-if="$v.form.name.$dirty && !$v.form.name.minLength" class="invalid-feedback">
                                Здесь должно быть больше 2-х символов
                            </p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group mb-12">
                            <label for="country">Страна</label>
                            <multiselect
                                id="country"
                                v-model="form.country"
                                class="w-100"
                                :options="countries"
                                :searchable="false"
                                :close-on-select="true"
                                :show-labels="false"
                                :placeholder="windowWidth > 1200 ? 'Выберите страну' : 'Страна'">
                            </multiselect>
                        </div>

                    </div>

                    <div v-if="(page === 'camp' || page === 'dreamland' || page === 'georgia' || page === 'jukov-lug')" class="d-block col-6">
                        <div class="form-group mb-12">
                            <label for="visit">Формат пребывания</label>
                            <multiselect
                                id="visit"
                                name="visit"
                                v-model="form.visit"
                                class="multiselect w-100"
                                :options="visit"
                                :searchable="false"
                                :close-on-select="true"
                                :show-labels="false"
                                :placeholder="windowWidth > 1200 ? 'Выберите формат пребывания' : 'Формат'">
                            </multiselect>
                        </div>
                    </div>

                    <div v-else class="col-6">
                        <div class="form-group mb-12">
                            <label for="format">Формат обучения</label>
                            <multiselect
                                id="format"
                                v-model="form.format"
                                class="w-100"
                                :options="format"
                                :searchable="false"
                                :close-on-select="true"
                                :show-labels="false"
                                :placeholder="windowWidth > 1200 ? 'Выберите формат обучения' : 'Формат'">
                            </multiselect>
                        </div>
                    </div>

                    <div v-if="(page === 'camp' || page === 'dreamland' || page === 'georgia' || page === 'jukov-lug')" class="d-block col-6">
                        <div class="form-group mb-12">
                            <label for="month">Месяц</label>
                            <multiselect
                                id="month"
                                name="month"
                                v-model="form.month"
                                class="multiselect w-100"
                                :options="month"
                                :searchable="false"
                                :close-on-select="true"
                                :show-labels="false"
                                :placeholder="windowWidth > 1200 ? 'Выберите месяц пребывания' : 'Месяц'">
                            </multiselect>
                        </div>
                    </div>

                    <div v-else class="col-6">
                        <div class="form-group mb-12">
                            <label for="country">Класс обучения</label>
                            <multiselect
                                id="grade"
                                v-model="form.grade"
                                class="multiselect w-100"
                                :options="grade"
                                :searchable="false"
                                :close-on-select="true"
                                :show-labels="false"
                                :placeholder="windowWidth > 1200 ? 'Выберите класс обучения' : 'Класс'">
                            </multiselect>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
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
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group mb-12">
                            <label for="name">Email*</label>
                            <input
                                id="email"
                                type="email"
                                class="form-control w-100"
                                placeholder="Введите email для связи"
                                :class="
                                    $v.form.email.$error ? 'is-invalid' : ''
                                "
                                v-model.trim="form.email"
                            />
                            <p
                                v-if="
                                    $v.form.name.$dirty &&
                                    !$v.form.email.required
                                "
                                class="invalid-feedback"
                            >
                                Обязательное поле
                            </p>
                            <p
                                v-if="
                                    $v.form.name.$dirty && !$v.form.email.email
                                "
                                class="invalid-feedback"
                            >
                                Email неккоректный
                            </p>
                        </div>
                    </div>

                </div>

                <div class="mb-12">
                    <label for="order_name">Есть вопросы? Напишите</label>
                    <textarea name="contact_msg" id="contact_msg" v-model="form.contact_msg" class="w-100 textarea"
                              placeholder="Напишите Ваш вопрос"></textarea>
                </div>

                <div class="box-check-ico col-12">
                    <label class="d-flex check-ico"
                           :class="$v.form.agreeWithRules.$error ? 'is-invalid' : ''"
                           for="agreeWithRules"
                    >
                        <input class="consent" id="agreeWithRules" type="checkbox" checked name="agreement" value="true"
                               autocomplete="off" v-model="form.agreeWithRules">
                        <span class="d-flex"></span>
                        <p class="politic grey">Нажимая на кнопку “Отправить заявку”, вы даете свое согласие на
                            обработку персональных данных в соответствии с
                            <a class="politic-link" target="_blank" href="/docs/privacy_policy.pdf">Политикой обработки персональных
                                данных</a>.</p>
                    </label>

                    <p
                        v-if="
                            $v.form.agreeWithRules.$dirty &&
                            !$v.form.agreeWithRules.mustBeTrue
                        "
                        class="invalid-feedback"
                    >
                        Прочтите правила!
                    </p>
                </div>

                <div class="form_btn">
                    <button type="submit" class="btn-purple button_2">Отправить</button>
                </div>

            </form>
        </div>
    </div>
</template>

<script>
    import {required, email, minLength, maxlength} from "vuelidate/lib/validators";
    import {validationMixin} from "vuelidate";
    import Multiselect from "vue-multiselect";

    export default {
        components: {
            Multiselect,
        },
        mixins: [validationMixin],
        props: {
            page: {
                default: null
            }
        },
        data() {
            return {
                windowWidth: null,
                registrationPassed: false,
                form: {
                    name: null,
                    email: null,
                    phone: null,
                    agreeWithRules: false,
                    format: null,
                    country: null,
                    grade: null,
                    contact_msg: null,
                    visit: null,
                    month: null
                },
                format: ['Онлайн', 'Оффлайн'],
                grade: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11"],
                visit: ["Дневной", "Круглосуточный"],
                month: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"]
            };
        },
        validations: {
            form: {
                name: {required, minLength: minLength(2)},
                email: {required, email},
                phone: {required, minLength: minLength(10)},
                // format: {required},
                // country: {required},
                // grade: {required},
                // contact_msg: {},
                agreeWithRules: {
                    mustBeTrue(value) {
                        return value;
                    },
                },
            },
        },
        created() {
            this.handleWindowResize();
            window.addEventListener('resize', this.handleWindowResize);
        },
        computed: {
            countries() {
                if(this.page && this.page === 'russia') return  ['Россия','Беларусь','Польша','Грузия', 'Другая'];
                else return  ['Беларусь','Россия','Польша','Грузия', 'Другая']
            },
        },
        methods: {
            checkForm() {

                this.$v.form.$touch();
                if (!this.$v.form.$error) {
                    axios.post('api/mail', {
                            name: this.form.name,
                            email: this.form.email,
                            phone: this.form.phone,
                            format: this.form.format,
                            country: this.form.country,
                            grade: this.form.grade,
                            contact_msg: this.form.contact_msg
                        }
                    )
                        /*.then(response => {
                            if (response) {
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
                        })*/
                        .then(response => {
                            if (response) window.location.href = '/thanks';
                        })
                }
            },
            handleWindowResize() {
                this.windowWidth = window.innerWidth;
            }
        },
    };
</script>

