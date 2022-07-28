
<template>
    <div>
        <div>
            <form
                v-if="!registrationPassed"
                class="sign-up"
                @submit.prevent="checkForm"
            >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-12">
                            <label for="name">Представьтесь*</label>
                            <input
                                id="name"
                                class="form-control w-100"
                                placeholder="Введите Ваше имя"
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
                            <label for="format">Формат обучения:</label>
                            <multiselect
                                id="format"
                                name="format"
                                v-model="form.format"
                                class="multiselect w-100"
                                :class="$v.form.format.$error ? 'is-invalid' : ''"
                                :options="format"
                                :searchable="false"
                                :close-on-select="true"
                                :show-labels="false"
                                placeholder="Выберите формат обучения"
                            >
                            </multiselect>
                            <p
                                v-if="
                                    !$v.form.format.required
                                "
                                class="invalid-feedback"
                            >
                                Выберите формат обучения
                            </p>

                        </div>

                        <div class="form-group mb-12">
                            <label for="name">Телефон*</label>
                            <input
                                id="phone"
                                type="text"
                                class="form-control w-100"
                                placeholder="Введите номер телефона"
                                :class="
                                    $v.form.phone.$error ? 'is-invalid' : ''
                                "
                                v-model.trim="form.phone"
                            />
                            <p
                                v-if="
                                    $v.form.name.$dirty &&
                                    !$v.form.phone.required
                                "
                                class="invalid-feedback"
                            >
                                Обязательное поле
                            </p>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="form-group mb-12">
                            <label for="country">Страна</label>
                            <multiselect
                                id="country"
                                v-model="form.country"
                                class="w-100"
                                :class="$v.form.country.$error ? 'is-invalid' : ''"
                                :options="countries"
                                :searchable="false"
                                :close-on-select="true"
                                :show-labels="false"
                                placeholder="Выберите страну"
                            >
                            </multiselect>
                            <p
                                v-if="
                                    !$v.form.country.required
                                "
                                class="invalid-feedback"
                            >
                                Выберите страну
                            </p>
                        </div>

                        <div class="form-group mb-12">
                            <label for="country">Класс обучения</label>
                            <multiselect
                                id="grade"
                                v-model="form.grade"
                                :class="$v.form.grade.$error ? 'is-invalid' : ''"
                                class="multiselect w-100"
                                :options="grade"
                                :searchable="false"
                                :close-on-select="true"
                                :show-labels="false"
                                placeholder="Выберите класс обучения"
                            >
                            </multiselect>
                            <p
                                v-if="
                                    !$v.form.grade.required
                                "
                                class="invalid-feedback"
                            >
                                Выберите класс обучения
                            </p>
                        </div>

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
                        <textarea name="contact_msg" id="contact_msg" v-model="form.contact_msg" class="w-100 textarea" placeholder="Напишите Ваш вопрос"></textarea>
                    </div>

                    <div class="box-check-ico col-12">
                                <label class="d-flex align-items-center check-ico"
                                :class="$v.form.agreeWithRules.$error ? 'is-invalid' : ''"
                                for="agreeWithRules"
                                >
                                    <input class="consent" id="agreeWithRules" type="checkbox" checked name="agreement" value="true"
                                        autocomplete="off" v-model="form.agreeWithRules">
                                    <span class="d-flex align-items-center"></span>
                                    <p class="politic grey">Нажимая на кнопку “Отправить заявку”, вы даете свое согласие на обработку персональных данных в соответствии с
                                        <a class="politic-link" target="_blank" href="/">Политикой обработки персональных данных</a>.</p>
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
            <div v-else>
                <h1>
                    {{ `${form.name}. Спасибо, Ваша заявка успешно отправлена!` }}
                </h1>
            </div>
        </div>
    </div>
</template>

<script>
import { required, email, minLength, maxlength } from "vuelidate/lib/validators";
import { validationMixin } from "vuelidate";
import Multiselect from "vue-multiselect";

export default {
    components: {
        Multiselect,
    },
    mixins: [validationMixin],
    data() {
        return {
            registrationPassed: false,
            form: {
                name: null,
                email: null,
                phone: null,
                agreeWithRules: false,
                format:null,
                country: null,
                grade: null,
                contact_msg: null
            },
            format: ['Онлайн', 'Оффлайн'],
            countries: ['Беларусь','Россия','Грузия', 'Польша'],
            grade: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11"],
        };
    },
    validations: {
        form: {
            name: { required, minLength: minLength(2) },
            email: { required, email },
            phone: { required, minLength: minLength(10) },
            format: { required },
            country: { required },
            grade: { required },
            contact_msg: {},
            agreeWithRules: {
                mustBeTrue(value) {
                    return value;
                },
            },
        },
    },
    methods: {
        checkForm() {

            this.$v.form.$touch();
            if (!this.$v.form.$error) {
                this.registrationPassed = true;

                axios.post('api/mail', { name: this.form.name, email: this.form.email, phone: this.form.phone, format: this.form.format, country: this.form.country, grade: this.form.grade, contact_msg: this.form.contact_msg})
            }
        },
    },
};
</script>

<style lang="scss" scoped>

.form-control {
    display: block;
    border: 1px solid #F4F2F7;
    border-radius: 8px;
    background: #F4F2F7;
    padding: 12px 16px;
    transition: 0.4s ease;
    color: #605F5F;
    font-family: "Rubik-Regular", sans-serif;
    font-size: 16px;
    line-height: 24px;
    font-weight: 400;
    background-clip: padding-box;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.form-control:focus, .form-control:active {
    border: 1px solid #8041FF;
    box-shadow: none;
    outline: none;
}
.form-control.is-invalid,
.multiselect .is-invalid {
    border-color: #dc3545!important;
}

.form-control:focus {
    box-shadow: none;
}

.form-check-input {
    width: 20px;
    height: 20px;
    border: 1px solid #8041FF;
    border-radius: 2px;
}

.form-check-input:focus {
    border-color: #8041FF;
    outline: 0;
    box-shadow: none;
}

.invalid-feedback {
    font-weight: 400;
    font-size: 12px;
    line-height: 18px;
    color: #BD2773;
    font-family: 'Rubik-Regular', sans-serif
}
.politic-link {
    color:#8041FF !important
}
</style>
