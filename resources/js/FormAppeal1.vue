<template>
    <div>
        <form class="appeal" @submit.prevent="checkForm2">
            <div class="row">
                <div class="col-lg-6">
                        <div class="form-group mb-12">
                            <label for="organization">Наименование и (или) адрес организации либо должность лица, которым направляется обращение*</label>
                            <input
                                id="organization"
                                class="form-control w-100"
                                :placeholder="windowWidth > 767 ? 'Введите наименование / адрес / должность' : 'Введите наимен. / адрес / должность'"
                                :class="$v.form.organization.$error ? 'is-invalid' : ''"
                                v-model.trim="form.organization"/>
                            <p v-if="$v.form.organization.$dirty &&!$v.form.organization.required" class="invalid-feedback">
                                Обязательное поле
                            </p>
                            <p v-if="$v.form.organization.$dirty && !$v.form.organization.minLength" class="invalid-feedback">
                                Здесь должно быть больше 5-и символов
                            </p>
                        </div>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-end">
                        <div class="form-group mb-12">
                            <label for="name">Фамилия, собственное имя, отчество либо инициалы*</label>
                            <input
                                id="name"
                                class="form-control w-100"
                                placeholder="Введите Ваше ФИО"
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
                <div class="col-lg-6">
                        <div class="form-group mb-12">
                            <label for="place">Адрес места жительства (места пребывания)*</label>
                            <input
                                id="place"
                                class="form-control w-100"
                                placeholder="Введите Ваш адрес"
                                :class="$v.form.place.$error ? 'is-invalid' : ''"
                                v-model.trim="form.place"/>
                                <p v-if=" $v.form.place.$dirty &&!$v.form.place.required" class="invalid-feedback">
                                Обязательное поле
                                </p>
                                <p v-if="$v.form.place.$dirty && !$v.form.place.minLength" class="invalid-feedback">
                                Здесь должно быть больше 5-и символов
                            </p>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="form-group mb-12">
                            <label for="email">Адрес электронной почты*</label>
                            <input
                                id="email"
                                class="form-control w-100"
                                placeholder="Введите Ваш email"
                                :class="
                                    $v.form.email.$error ? 'is-invalid' : ''
                                "
                                v-model.trim="form.email"/>
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
                    <label for="appeal_question">Есть вопросы? Напишите</label>
                    <textarea name="appeal_question" id="appeal_question"  class="w-100 textarea"
                    placeholder="Изложите суть обращения"
                    :class="$v.form.appeal_question.$error ? 'is-invalid' : ''"
                    v-model.trim="form.appeal_question"
                    ></textarea>
                    <p v-if=" $v.form.appeal_question.$dirty &&!$v.form.appeal_question.required" class="invalid-feedback">
                        Обязательное поле
                    </p>
            </div>
            
            <div class="form_btn justify-content-start">
                <button type="submit" class="btn-purple button_2">Отправить</button>
            </div>
        </form>
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
                organization: null,
                name: null,
                place: null,
                email: null,
                appeal_question: null,
            },
        }
    },
    validations: {
        form: {
            organization: {required, minLength: minLength(5)},
            name: {required, minLength: minLength(2)},
            place: {required, minLength: minLength(5)},
            email: {required, email},
            appeal_question: {required},
        }
    },
    created() {
        this.handleWindowResize();
        window.addEventListener('resize', this.handleWindowResize);
    },
    methods: {
        checkForm2() {
            this.$v.form.$touch();
            if (!this.$v.form.$error) {
                axios.post('https://smart-s.info/api/mail', {
                        organization: this.form.organization,
                        name: this.form.name,
                        place: this.form.place,
                        email: this.form.email,
                        appeal_question: this.form.appeal_question
                    }
                )
                    .then(response => {
                        if (response) window.location.href = '/thanks';
                    })
            }
        },
        handleWindowResize() {
            this.windowWidth = window.innerWidth;
        }
    },

}



</script>