<template>

    <div>
        <section id="appeals_page">
                <div class="filter-tabs scrollreveal">
                    <ul>
                        <div class="w-100">
                            <li v-for="(item, i) in filter_points " :key="i" :item="item"
                            class="p text col-lg-6"
                            v-on:click="visible=!visible"
                            :class="{active: activeClass === item.value}">
                            {{item.title}}
                            </li>
                        </div>
                        
                    </ul>
                </div>

                <div class="inner"> 
                    <div class="row">
                                    <div v-if="visible">
                                        <app-appeal-form1></app-appeal-form1>
                                    </div>
                                    <div v-else>
                                        <app-appeal-form2></app-appeal-form2>
                                    </div>
                                </div>
                </div>
                
            
        </section>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                visible: true,
                filter_appeals: [],
                activeClass: '0',
                filter_points: [
                    {
                        title: 'Электронное обращение граждан',
                        value: '1'
                    },
                    {
                        title: 'Электронное обращение ЮЛ и ИП',
                        value: '2'
                    }
                ],
            }
        },
        created() {
            this.filter_appeals = this.appeals
        },
        methods: {
            filter(value) {
                this.activeClass = value;
                let filter = this.appeals;

                if (value !== '0') {
                    filter = filter.filter(appeals => {
                        return appeals.value.includes(value)
                    });
                    this.filter_appeals = filter;
                }
                else this.filter_appeals = this.appeals;
            }
        }
    }

</script>