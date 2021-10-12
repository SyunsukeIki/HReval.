<template>
        <article>
            <h1 class="title">目標シートテンプレート<br>配布</h1>
            <div class="sec-content">
                <div class="section1">         
                    <b-badge variant="info" ><span class="badge-size">テンプレート名</span></b-badge>
                    <div class="item1">
                        <b-form-select v-model="selected" :options="options"></b-form-select>
                    </div>
                </div>
                <div class="section1">
                    <b-badge variant="info" ><span>配布対象期間</span></b-badge>
                    <div class="item1">
                        <b-form-select v-model="selected2" :options="options2"></b-form-select>
                    </div>
                </div>
                <div  class="section2">
                    <b-badge variant="info" ><span class="badge-size">配布先</span></b-badge>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="ユーザー名、グループ名を入力して絞り込み">
                        <div class="item2">
                            <b-form-select v-model="selected3" :options="options3"></b-form-select>
                        </div>
                    </div>                                        
                </div>
                <div class="end">
                    <a href="#" class="link-primary">絞り込み結果を全選択</a>
                </div>
                <div class="sheetlist-sec1">
                    <div class="sheetlist-table">
                        <b-table :items="items" :fields="fields">
                            <template #cell(evaluator)="">
                                <div>
                                    <b-badge pill variant="success"><span class="badge-size2">①山田太郎</span></b-badge>
                                </div>
                            </template>
                            <template #cell(isEdit)="">
                                <div>
                                    <b-button variant="outline-info" v-b-modal.evaluator_edit><b-icon icon="journal-text" aria-hidden="true"></b-icon> 編集</b-button>
                                </div>
                            </template>       
                        </b-table>
                    </div>
                </div>
                <evaluator-edit evaluator_edit_modal_id="evaluator_edit" />
            </div>
        </article>
</template>
<script>
  import EvaluatorEdit  from '../atoms/EvaluatorEdit.vue';
  export default {

    name: 'template-distribution',
    components: {EvaluatorEdit},
    data() {
            return{   
                fields: [
                { key: 'employee', label: 'ユーザー名' },
                { key: 'evaluator', label: '評価者' },
                { key: 'isEdit', label: '' },
                { key: 'group', label: '付属グループ' },
                { key: 'distributed', label: '配布' }
                ],
                items: [
                { employee: '阿部太郎', evaluator: '<b-badge variant="info">一般社員</b-badge>', isEdit:'', group: 'プログラマ（社外事業）', distributed: '済' },
                { employee: '阿部太郎', evaluator: 'システム事業部', isEdit:'',group: 'プログラマ（社外事業）', distributed: '未' },
                { employee: '鵜飼太郎', evaluator: 'システム事業部', isEdit:'',group: '営業', distributed: '未' },
                { employee: '江田山太郎', evaluator: 'システム事業部', isEdit:'',group: '営業', distributed: '済' },
                { employee: '小野太郎', evaluator: '制作事業部', isEdit:'',group: 'デザイナー（社内事業）', distributed: '済' }
                ], 
                selected: null,
                options: [
                    { value: null, text: 'テンプレートを選択' },
                    { value: '1', text: '一般社員_2020' },
                    { value: '2', text: '一般社員_2021' },
                    { value: '3', text: '営業社員_2020' },
                    { value: '4', text: '営業社員_2021' },
                    { value: '5', text: 'リーダー用_2020' },
                    { value: '6', text: 'リーダー用_2021' }
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

                selected3: null,
                options3: [
                    { value: null, text: '配布' },
                    { value: '1', text: '済' },
                    { value: '2', text: '未' },
                    ]
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
.item1{
    margin-left: 5px;
    width:70%;
}
.section2{
    margin-top: 20px;
}
.badge-size2{
    display: flex;
    justify-content: center;
}
.end{
    display: flex;
    justify-content: flex-end;
}


</style>