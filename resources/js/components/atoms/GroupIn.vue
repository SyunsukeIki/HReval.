<template>
    <div>
        <b-modal :id=group_in_modal_id title="グループにユーザーを追加" hide-footer size="xl">
                <div  class="section1">
                    <b-badge href="#" variant="info" ><span class="badge-size">絞り込み</span><b-icon icon="search" style="margin:0 2px 0 4px;"></b-icon></b-badge>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="ユーザー名、評価者、所属グループで絞り込み(スペース区切り）">
                    </div>                                        
                </div>
                <div class="item">
                    <a class="link-primary" @click="selectAll" style="cursor: pointer;">絞り込み結果を全選択</a>
                </div>
                <div class="list-sec">
                    <div class="sheetlist-table">
                        <b-table sticky-header :items="items" :fields="fields">
                            <template #cell(checkbox)>
                                <div v-if="allSelect">
                                    <b-form-checkbox class="checkbox-size" size="lg" :checked="true"></b-form-checkbox>
                                </div>
                                <div v-else>
                                    <b-form-checkbox class="checkbox-size" size="lg"></b-form-checkbox>
                                </div>
                            </template>     
                            <template #cell(evaluators)="data">
                                <div class="item">
                                    <b-badge :key="evaluator" v-for="evaluator in data.item.evaluators" pill variant="success"><span class="badge-size"> {{evaluator}}</span></b-badge>
                                </div>
                            </template>
                            <template #cell(group)="data">
                                <div>
                                    <b-badge :key="group" v-for="group in data.item.groups" pill variant="success"><span class="badge-size"> {{group}}</span></b-badge>
                                </div>
                            </template>      
                        </b-table>
                    </div>
                </div>
                <evaluator-edit evaluator_edit_modal_id="evaluator_edit" />
                <group-edit group_edit_modal_id="group_edit" />
                <distribution-check distribution_check_modal_id="distribution_check" />
                <div class="end">
                    <b-button variant="primary">追加</b-button>
                </div>
        </b-modal>
    </div>
</template>

<script>
    export default {
        name: 'group-in',
        props:{
            group_in_modal_id:null,
        },
        data() {
            return {
                allSelect: false,
                fields: [
                    { key: 'checkbox', label: '' },
                    { key: 'employee', label: 'ユーザー名' },
                    { key: 'evaluators', label: '評価者' },
                    { key: 'group', label: '所属グループ' },
                ],
                items: [
                    { employee: '井上太郎',   evaluators:['①中西太郎', '②佐藤次郎', ], groups: ['プログラマ（社外事業）','リーダー']},
                    { employee: '阿部太郎',   evaluators:['①松田太郎', '②川村勇気', '③鈴木大輔'], groups: ['プログラマ（社外事業）']},
                    { employee: '鵜飼太郎',   evaluators:['①瀬戸太郎'], groups: ['営業']},
                    { employee: '江田山太郎', evaluators:['①田中太郎', '②佐藤次郎', '③木村花子'],groups: ['営業','リーダー']},
                    { employee: '小野太郎',   evaluators:['①岩崎太郎', '②浜村鉄平'], groups: ['デザイナー（社内事業）']}
                ], 
                
            }

        },
        methods: {
            selectAll: function(){
            this.allSelect = true
            },
        }
    };
</script>

<style>



</style>