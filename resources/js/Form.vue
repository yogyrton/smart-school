<template>
        <form action="" class="order-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-12">
                                        <label for="order_name">Представьтесь*</label>
                                        <input type="text" id="order_name" name="order_name" class="w-100" placeholder="Введите Ваше имя" required>
                                    </div>

                                    <div class="mb-12">
                                        <label for="contact_phone">Телефон*</label>
                                        <input placeholder="Введите номер телефона"  type="text" id="contact_phone" name="order_phone" class="w-100 input-mask__phone" required>
                                    </div>

                                    <div class="mb-12">
                                        <label for="contact_email">Email*</label>
                                        <input placeholder="Введите email для связи" type="text" id="contact_email" name="contact_email" class="w-100 input-mask__mail" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-12">
                                        <label for="order_name">Представьтесь*</label>
                                        <input type="text" id="order_name" name="order_name" class="w-100" placeholder="Введите Ваше имя" required>
                                    </div>

                                    <!-- <div class="mb-12">
                                        <label for="contact_phone">Телефон*</label>
                                        <input placeholder="Введите номер телефона"  type="text" id="contact_phone" name="order_phone" class="w-100 input-mask__phone" required>
                                    </div> -->

                                    <div class="mb-12">
                                        <label class="typo__label"> Страна</label>
                                        
                                        <div>
                                            
                                        </div>
                                    </div>

                                    <div class="mb-12">
                                        <label for="contact_email">Email*</label>
                                        <input placeholder="Введите email для связи" type="text" id="contact_email" name="contact_email" class="w-100 input-mask__mail" required>
                                    </div>
                                </div>

                                <div>
                                    <label for="order_name">Есть вопросы? Напишите</label>
                                    <textarea name="contact_msg" id="contact_msg" class="w-100" placeholder="Напишите Ваш вопрос"></textarea>
                                </div>
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
      value: '',
      options: ['Россия', 'Беларусь', 'Польша', 'Грузия']
    }
  }
}
</script>

