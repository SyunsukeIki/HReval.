<template>
    <div class="memo">
        <b-modal :id=distribution_check_modal_id title="配布実行確認" hide-footer size="lg">
                <div class="section1">         
                    <b-badge variant="info" ><span class="badge-size">配布テンプレート名</span></b-badge>
                    <div class="item1">{{templateName}} </div>
                </div>
                <div class="section1">
                    <b-badge variant="info" ><span class="badge-size">配布対象期間</span></b-badge>
                    <div class="item1">{{templatePeriod}}</div>
                </div>
                <div class="section2">
                    <b-badge variant="info" ><span class="badge-size">配布対象ユーザー</span></b-badge>
                    <div class="sheetlist">
                        <b-table :items="items" :fields="fields">
                            <template #cell(checkbox)>
                                <div>
                                    <b-form-checkbox class="checkbox-size" size="lg"></b-form-checkbox>
                                </div>
                            </template>     
                            <template #cell(evaluators)="data">
                                <div class="item">
                                    <b-badge :key="evaluator" v-for="evaluator in data.item.evaluators" pill variant="success"><span class="badge-size"> {{evaluator}}</span></b-badge>
                                </div>
                            </template>
                            <template #cell(isEdit)>
                                <div>
                                    <b-button variant="outline-info" v-b-modal.evaluator_edit><b-icon icon="journal-text" aria-hidden="true"></b-icon> 編集</b-button>
                                </div>
                            </template>    
                            <template #cell(group)="data">
                                <div>
                                    <b-badge :key="group" v-for="group in data.item.groups" pill variant="success"><span class="badge-size"> {{group}}</span></b-badge>
                                </div>
                            </template>   
                        </b-table>
                    </div>
                    <div class="end">
                        <b-button variant="primary" v-b-modal.distribution_check>実行</b-button>
                    </div>
                </div>

        </b-modal>
    </div>
</template>

<script>
    export default {
        name: 'distribution-check',
        props:{
            distribution_check_modal_id:null,
            memo_item:null,
            memo_item_detail:null,
        },
        data() {
            return {
                templateName: '2021_一般社員_リーダー',
                templatePeriod: '2021/01/01~2021/05/31',
                fields:[    { key: 'employee', label: 'ユーザー名' },
                            { key: 'evaluators', label: '評価者' },
                            { key: 'group', label: '所属グループ' },
                    ],
                items: [
                    { employee: '阿部太郎',   evaluators:['①中西太郎', '②佐藤次郎', ], groups: ['プログラマ（社外事業）','リーダー']},
                    { employee: '阿部太郎',   evaluators:['①松田太郎', '②川村勇気', '③鈴木大輔'], groups: ['プログラマ（社外事業）']},
                    { employee: '鵜飼太郎',   evaluators:['①瀬戸太郎'],  groups: ['営業'],},
                    { employee: '江田山太郎', evaluators:['①田中太郎', '②佐藤次郎', '③木村花子'], groups: ['営業','リーダー']},
                    { employee: '小野太郎',   evaluators:['①岩崎太郎', '②浜村鉄平'],  groups: ['デザイナー（社内事業）']}
                ], 

                text:"",

                selected: null,
                options: [
                    { value: 'a', text: '中村太郎' },
                    { value: 'b', text: '斎藤次郎' },
                    { value: 'c', text: '小室太郎' },
                    { value: 'd', text: '佐藤次郎',},
                    { value: 'e', text: '松尾奈々' },
                    { value: 'f', text: '菅圭' },
                    { value: 'g', text: '末田利信' },
                    { value: 'h', text: '山田孝之' },
                    { value: 'i', text: '大島勇気' },
                    { value: 'j', text: '田中五郎' },
                    { value: 'k', text: '三ツ島大吾' },
                    { value: 'l', text: '江頭宗助' },
                ],
                selected2: null,
                options2: [
                    { value: 'a', text: '①中村太郎' },
                    { value: 'b', text: '②斎藤次郎' },
                    { value: 'c', text: '③小室太郎' },
                ],
            }
        }
    };
</script>

<style>
.start{
    display: flex;
}
.start2{
    display: flex;
    margin-bottom: 10px;
    }
.section2{
    margin-top: 20px;
}
.sheetlist{
    margin: 2px 0 15px;
    padding: 10px;
}

.end{
    display: flex;
    justify-content: flex-end;
}
    

</style>