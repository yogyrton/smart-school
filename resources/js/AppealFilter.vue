<template>

<div>
        <form id="appeals_page" class="appeal mb-40" @submit.prevent="checkForm">
            <div class="filter-tabs d-flex justify-content-center">
                    <div class="w-100 row">
                        <ul>
                            <div class="w-100 d-flex">
                                <a  v-if="width > 576" v-on:click="type=1" class="text col-lg-6" v-bind:class="[type===1?'activeText':'' ]">Электронное обращение граждан </a>
                                <a  v-else v-on:click="type=1" class="text col-lg-6" v-bind:class="[type===1?'activeText':'' ]">Эл. обращ. граждан </a>

                                <a v-if="width > 576" v-on:click="type=2" class="text col-lg-6" v-bind:class="[type===2?'activeText':'' ]" >Электронное обращение ЮЛ и ИП</a>
                                <a v-else v-on:click="type=2" class="text col-lg-6" v-bind:class="[type===2?'activeText':'' ]" >Эл. обращ. ЮЛ и ИП</a>

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
                                    $v.form.name.$dirty &&
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
                                    $v.form.email.$error ? 'is-invalid' : ''
                                "
                                v-model.trim="form.email"/>
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
                        </div>
                    </div>
                </div>

                <div v-if="type===1" class="dada">
                        <label v-on:change="handFileUpload()" for="file" class="file_label text"> Прикрепить документ
                            <input class="d-none" type="file" id="file" ref="file" />
                        </label>
                    </div>
                
                <div class="form_btn justify-content-start mb-40 mt-40">
                    <button v-on:click="submitFile()" type="submit" class="btn-purple button_2">Отправить</button>
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
            activeClass: '0',
            file: '',
            type: 1,
            windowWidth: null,
            registrationPassed: false,
            form: {
                organization: null,
                organization_name: null,
                name: null,
                place: null,
                place_organization: null,
                email: null,
                email_organization: null,
                appeal_question: null,
            },
        }
    },
    validations: {
        form: {
            organization: {required, minLength: minLength(5)},
            organization_name: {required, minLength: minLength(5)},
            name: {required, minLength: minLength(2)},
            place: {required, minLength: minLength(5)},
            place_organization: {required, minLength: minLength(5)},
            email: {required, email},
            email_organization: {required, email},
            appeal_question: {required},
        }
    },
    created() {
        this.handleWindowResize();
        window.addEventListener('resize', this.handleWindowResize);
    },
    methods: {
        checkForm() {
            this.$v.form.$touch();
            if (!this.$v.form.$error) {
                axios.post('https://smart-s.info/api/mail', {
                        organization: this.form.organization,
                        organization_name: this.form. organization_name,
                        name: this.form.name,
                        place: this.form.place,
                        place_organization: this.form.place_organization, 
                        email: this.form.email,
                        email_organization: this.form.email_organization,
                        appeal_question: this.form.appeal_question
                    }
                )
                    .then(response => {
                        if (response) window.location.href = '/thanks';
                    })
            }
        },
        handleWindowResize() {
            this.width = window.innerWidth;
        },
        submitFile() {
            let formData = new FormData();
            formData.append('file', this.file);
            axios.post ('/single-file', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then (function() {
                console.log('SUCCESS!!');
            })
            .catch(function(){
                console.log('FAILURE!!');
            });
        },
        handFileUpload() {
            this.file = this.$refs.file.files[0];
            if  (file ==='') 
                console.log ('тут пусто')
            else alert ('Файл выбран')
        }
    }
}
</script>
