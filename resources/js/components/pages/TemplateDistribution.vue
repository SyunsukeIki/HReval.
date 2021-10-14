<template>
        <article>
            <h1 class="title">目標シートテンプレート<br>配布</h1>
                <div class="section1">         
                    <b-badge variant="info" ><span class="badge-size">テンプレート名</span></b-badge>
                    <div class="item1">
                        <b-form-select v-model="selected" :options="options"></b-form-select>
                    </div>
                </div>
                <div class="section1">
                    <b-badge variant="info" ><span class="badge-size">配布対象期間</span></b-badge>
                    <div class="item1">
                        <b-form-select v-model="selected2" :options="options2"></b-form-select>
                    </div>
                </div>
            <h2>配布対象ユーザー</h2>
            <div class="sec-content">
                <div  class="section2">
                    <b-badge variant="primary" ><span class="badge-size">絞り込み</span></b-badge>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="ユーザー名、グループ名を入力して絞り込み">
                    </div>                                        
                </div>
                <div class="item">
                    <a href="#" class="link-primary">絞り込み結果を全選択</a>
                </div>
                <div class="list-sec">
                    <div class="sheetlist-table">
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
                </div>
                <evaluator-edit evaluator_edit_modal_id="evaluator_edit" />
                <distribution-check distribution_check_modal_id="distribution_check" />
                <div class="end">
                    <b-button variant="primary" v-b-modal.distribution_check>実行</b-button>
                    <b-button variant="success" ><a href="/aimtemplatelist">戻る</a></b-button>
                </div>
            </div>
        </article>
</template>
<script>
  import EvaluatorEdit  from '../atoms/EvaluatorEdit.vue';  
  import DistributionCheck  from '../atoms/DistributionCheck.vue';
  
  export default {

    name: 'template-distribution',
    components: {EvaluatorEdit, DistributionCheck},
    data() {
            return{   
                fields: [
                    { key: 'checkbox', label: '' },
                    { key: 'employee', label: 'ユーザー名' },
                    { key: 'evaluators', label: '評価者' },
                    { key: 'isEdit', label: '' },
                    { key: 'group', label: '所属グループ' },
                ],
                items: [
                    { employee: '阿部太郎',   evaluators:['①中西太郎', '②佐藤次郎', ], isEdit:'',  groups: ['プログラマ（社外事業）','リーダー']},
                    { employee: '阿部太郎',   evaluators:['①松田太郎', '②川村勇気', '③鈴木大輔'], isEdit:'',  groups: ['プログラマ（社外事業）']},
                    { employee: '鵜飼太郎',   evaluators:['①瀬戸太郎'], isEdit:'',  groups: ['営業']},
                    { employee: '江田山太郎', evaluators:['①田中太郎', '②佐藤次郎', '③木村花子'], isEdit:'',  groups: ['営業','リーダー']},
                    { employee: '小野太郎',   evaluators:['①岩崎太郎', '②浜村鉄平'], isEdit:'',  groups: ['デザイナー（社内事業）']}
                ], 
                evaluators:["中西太郎", "佐藤次郎", "鈴木大輔"],
                selected: null,
                options: [
                    { value: null, text: 'テンプレートを選択' },
                    { value: '1',  text: '一般社員_2020' },
                    { value: '2',  text: '一般社員_2021' },
                    { value: '3',  text: '営業社員_2020' },
                    { value: '4',  text: '営業社員_2021' },
                    { value: '5',  text: 'リーダー用_2020' },
                    { value: '6',  text: 'リーダー用_2021' }
                ],

                selected2: null,
                options2: [
                    { value: null, text: '配布対象期間を選択' },
                    { value: '1', text: '2020/01/02~2020/06/01' },
                    { value: '2', text: '2020/06/02~2021/01/01' },

                    { value: '3', text: '2021/01/02~2021/06/01' },
                    { value: '4', text: '2021/06/02~2022/01/01' },
                    { value: '5', text: '2022/01/02~2022/06/01' },
                    { value: '6', text: '2022/06/02~2023/01/01' }
                ],
        }  
        
    },

}
</script>
<style>
.section1{
    display: flex;
    justify-content: flex-start;
    margin-top: 20px;
}
h2{
    margin: 30px 0 0 12px;
    font-size: 24px;
}
.item{
    display: flex;
    align-items: flex-start;
}
.item a{
    font-size: 14px;
}
.item1{
    margin-left: 5px;
    width:70%;
}

.end{
    display: flex;
    justify-content: flex-end;
}
.end a{
    color: #fff;
}


</style>