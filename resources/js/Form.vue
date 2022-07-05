<template>
        <form action="" class="order-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-12">
                                        <label for="order_name">Представьтесь*</label>
                                        <input type="text" id="order_name" name="order_name" class="w-100" placeholder="Введите Ваше имя" required>
                                    </div>

                                    <div class="mb-12"> 
                                            <div>
                                                <label class="typo__label">Формат обучения</label>
                                                <multiselect v-model="value1" :options="options1" :searchable="false" :close-on-select="true" :show-labels="false" placeholder="Выберите формат обучения" required>
                                                
                                                </multiselect>
                                            </div>
                                    </div>

                                    <div class="mb-12">
                                        <label for="contact_phone">Телефон*</label>
                                        <input placeholder="Введите номер телефона" type="text" id="contact_phone" name="order_phone" class="w-100 input-mask__phone" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-12"> 
                                            <div>
                                                <label class="typo__label">Страна</label>
                                                <multiselect  v-model="value2" :options="options2" :searchable="false" :close-on-select="true" :show-labels="false" placeholder="Выберите страну">
                                                </multiselect>
                                            </div>
                                    </div>

                                    <div class="mb-12"> 
                                            <div>
                                                <label class="typo__label">Класс обучения</label>
                                                <multiselect  v-model="value3" :options="options3" :searchable="false" :close-on-select="true" :show-labels="false" placeholder="Выберите класс обучения">
                                                </multiselect>
                                            </div>
                                    </div>


                                    <div class="mb-12">
                                        <label for="contact_email">Email*</label>
                                        <input placeholder="Введите email для связи" type="text" id="contact_email" name="contact_email" class="w-100 input-mask__mail" required>
                                    </div>
                                </div>

                                <div class="mb-12">
                                    <label for="order_name">Есть вопросы? Напишите</label>
                                    <textarea name="contact_msg" id="contact_msg" class="w-100" placeholder="Напишите Ваш вопрос"></textarea>
                                </div>
                            </div>
                            <div class="box-check-ico col-12">
                                <label class="d-flex check-ico">
                                    <input class="consent" type="checkbox" checked name="agreement" value="true"
                                        autocomplete="off" required>
                                    <span class="d-flex"></span>
                                    <p class="politic grey">Нажимая на кнопку “Отправить заявку”, вы даете свое согласие на обработку персональных данных в соответствии с
                                        <a class="accentColor" target="_blank" href="/">Политикой обработки персональных данных</a>.</p>
                                </label>
                            </div>

                            <div class="form_btn">
                                <button class="btn-purple button_2">Отправить</button>
                            </div>
                            
        </form>
                                    
</template>

<script>

import Multiselect from 'vue-multiselect'

export default {
    components: {
    Multiselect
  },
  data () {
    return {
      options1: ['Онлайн','Camp'],
      options2: ['Беларусь','Россия','Грузия','Испания','Франция','Молдова'],
      options3: ['1-4','5-11'],
      value1: [],
      value2: [],
      value3: []
    }
  }
}
</script>

