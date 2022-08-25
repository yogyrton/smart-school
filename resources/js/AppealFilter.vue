<template>

<div>
        <form id="appeals_page" class="appeal mb-40" @submit.prevent="checkForm">
            <div class="filter-tabs d-flex justify-content-center">
                    <div class="w-100 row">
                        <ul>
                            <div class="w-100 d-flex">
                                <a  v-if="width > 576" @click = changeType(1) class="text col-lg-6" v-bind:class="[type===1?'activeText':'' ]">Электронное обращение граждан </a>
                                <a  v-else @click = changeType(1) class="text col-lg-6" v-bind:class="[type===1?'activeText':'' ]">Эл. обращ. граждан </a>

                                <a v-if="width > 576"  @click = changeType(2) class="text col-lg-6" v-bind:class="[type===2?'activeText':'' ]" >Электронное обращение ЮЛ и ИП</a>
                                <a v-else @click = changeType(2) class="text col-lg-6" v-bind:class="[type===2?'activeText':'' ]" >Эл. обращ. ЮЛ и ИП</a>

                            </div>

                        </ul>
                    </div>
            </div>

            <div class="inner">
                <div class="row">
                <div class="col-lg-6">
                        <div class="form-group mb-20">
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
                <div v-if="type===1" class="col-lg-6 d-flex flex-column justify-content-end">
                        <div class="form-group mb-20">
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

                <div v-else class="col-lg-6 d-flex flex-column justify-content-end">
                        <div class="form-group mb-20">
                            <label for="organization_name">Полное наименование юридического лица*</label>
                            <input
                                id="organization_name"
                                class="form-control w-100"
                                placeholder="Введите наименование ЮЛ"
                                :class="$v.form.organization_name.$error ? 'is-invalid' : ''"
                                v-model.trim="form.organization_name"/>
                            <p v-if="$v.form.organization_name.$dirty &&!$v.form.organization_name.required" class="invalid-feedback">
                                Обязательное поле
                            </p>
                            <p v-if="$v.form.organization_name.$dirty && !$v.form.organization_name.minLength" class="invalid-feedback">
                                Здесь должно быть больше 5-и символов
                            </p>
                        </div>
                </div>

                <div v-if="type===1" class="col-lg-6">
                        <div class="form-group mb-20">
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

                <div v-else class="col-lg-6">
                        <div class="form-group mb-20">
                            <label for="place_organization">Место нахождения юридического лица*</label>
                            <input
                                id="place_organization"
                                class="form-control w-100"
                                placeholder="Введите Ваш адрес"
                                :class="$v.form.place_organization.$error ? 'is-invalid' : ''"
                                v-model.trim="form.place_organization"/>
                                <p v-if=" $v.form.place_organization.$dirty &&!$v.form.place_organization.required" class="invalid-feedback">
                                Обязательное поле
                                </p>
                                <p v-if="$v.form.place_organization.$dirty && !$v.form.place_organization.minLength" class="invalid-feedback">
                                Здесь должно быть больше 5-и символов
                            </p>
                        </div>
                </div>


                <div v-if="type===1" class="col-lg-6">
                        <div class="form-group mb-20">
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
                                    $v.form.email.$dirty &&
                                    !$v.form.email.required
                                "
                                class="invalid-feedback"
                            >
                                Обязательное поле
                            </p>
                            <p
                                v-if="
                                    $v.form.email.$dirty && !$v.form.email.required
                                "
                                class="invalid-feedback"
                            >
                                Email неккоректный
                            </p>
                        </div>
                </div>

                <div v-else class="col-lg-6">
                        <div class="form-group mb-20">
                            <label for="email_organization">Адрес электронной почты юридического лица*</label>
                            <input
                                id="email_organization"
                                class="form-control w-100"
                                placeholder="Введите Ваш email"
                                :class="
                                    $v.form.email_organization.$error ? 'is-invalid' : ''
                                "
                                v-model.trim="form.email_organization"/>
                                <p
                                v-if="
                                    $v.form.email_organization.$dirty &&
                                    !$v.form.email_organization.required
                                "
                                class="invalid-feedback"
                            >
                                Обязательное поле
                            </p>
                            <p
                                v-if="
                                    $v.form.email_organization.$dirty && !$v.form.email_organization.required
                                "
                                class="invalid-feedback"
                            >
                                Email неккоректный
                            </p>
                        </div>
                </div>

            </div>
                <div class="mb-20">
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

                <div v-if="type===2" class="row">
                    <div  class="col-lg-6 d-flex flex-column justify-content-end">
                        <div class="form-group mb-20">
                            <label for="name">Фамилия, собственное имя, отчество лица, уполномоченного подписывать обращения*</label>
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

                    <div v-if="type===2" class="col-lg-6 d-flex align-items-center">
                        <div class="dada">
                            <label v-on:change="handFileUpload()" for="file" class="file_label text"> Прикрепить документ
                                <input class="d-none" type="file" id="file" ref="file" />
                            </label>
                            {{file}}
                        </div>

                    </div>
                </div>

                <div v-if="type===1" class="dada">
                        <label v-on:change="handFileUpload()" for="file" class="file_label text"> Прикрепить документ
                            <input class="d-none" type="file" id="file" ref="file" />
                        </label>
                        {{file}}
                </div>


                <div class="form_btn justify-content-start mb-40 mt-40">
                    <button type="submit" class="btn-purple button_2">Отправить</button>
                </div>
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
            width: null,
            type: 1,
            file: '',
            windowWidth: null,
            registrationPassed: false,
            form: {
                organization: '',
                organization_name: '',
                name: '',
                place: '',
                place_organization: '',
                email: '',
                email_organization: '',
                appeal_question: '',
                files: ''

            },
        }
    },
    validations() {
        if(this.type == 1) {
            return {
                form: {
                    organization: {required, minLength: minLength(5)},
                    name: {required, minLength: minLength(2)},
                    place: {required, minLength: minLength(5)},
                    email: {required, email},
                    appeal_question: {required},
                }
            }
        }
        if(this.type == 2) {
            return {
                form: {
                    organization: {required, minLength: minLength(5)},
                    organization_name: {required, minLength: minLength(5)},
                    place_organization: {required, minLength: minLength(5)},
                    email_organization: {required, email},
                    appeal_question: {required},
                    name: {required, minLength: minLength(2)},
                }
                }
            }
        },
    created() {
        this.handleWindowResize();
        window.addEventListener('resize', this.handleWindowResize);
    },

    methods: {
        changeType(i) {
            this.type = i;
            this.$v.$reset();
        },
        checkForm() {
            this.$v.form.$touch();
            if (!this.$v.form.$error) {
                let formData = new FormData();

                formData.append('file', this.form.files);
                formData.append('organization', this.form.organization);
                formData.append('organization_name', this.form.organization_name);
                formData.append('name', this.form.name);
                formData.append('place', this.form.place);
                formData.append('place_organization', this.form.place_organization);
                formData.append('email', this.form.email);
                formData.append('email_organization', this.form.email_organization);
                formData.append('appeal_question', this.form.appeal_question);
                axios.post('https://smart.ilavista.tech/api/mail-window', formData,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(response => {
                        if (response) window.location.href = '/thanks';
                    })
            }
        },
        handleWindowResize() {
            this.width = window.innerWidth;
        },
        handFileUpload() {
            this.form.files = this.$refs.file.files[0];
            this.file = 'Документ выбран';
        }
    }
}
</script>
