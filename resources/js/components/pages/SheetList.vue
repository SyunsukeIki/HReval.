<template>
    <div class="sheetlist-sec1">
        <b-container class="bv-example-row">
            <b-row>
                <b-col><b-form-select v-model="selected_1" :options="year" ></b-form-select></b-col>
                <b-col><b-form-select v-model="selected_2" :options="evaluatee" ></b-form-select></b-col>
                <b-col><b-form-select v-model="selected_3" :options="evaluator" ></b-form-select></b-col>
                <b-col><b-form-select v-model="selected_4" :options="state" ></b-form-select></b-col>
            </b-row>
        </b-container>

        <hr class="my-4">

        <div class="sheetlist-table">
            <b-table striped hover :items="items" :fields="fields"
                     :filter="filter" :filter-function="tableFilter"
            ></b-table>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'sheet-list',
    data() {
        return {
            fields: [
                { key: 'year', label: '年度' },
                { key: 'evaluatee', label: '被評価者' },
                { key: 'evaluator', label: '評価者' },
                { key: 'state', label: '状態' }
            ],
            items: [
                { year: '令和3年上期', evaluatee: '阿部　太郎', evaluator: '植野　広', state: '一次評価待ち' },
                { year: '令和3年上期', evaluatee: '井手　太郎', evaluator: '植野　広', state: '二次評価待ち' },
                { year: '令和3年上期', evaluatee: '鵜飼　太郎', evaluator: '植野　広', state: '評価完了' },
                { year: '令和3年下期', evaluatee: '江田山　太郎', evaluator: '植野　広', state: '目標設定差し戻し' },
                { year: '令和3年下期', evaluatee: '小野　太郎', evaluator: '中村　花子', state: '一次評価待ち' }
            ],

            selected_1: null,
            year: [
                { value: null, text: '年度' },
                { value: '令和3年上期', text: '令和3年上期' },
                { value: '令和3年下期', text: '令和3年下期' }
            ],

            selected_2: null,
            evaluatee: [
                { value: null, text: '被評価者' },
                { value: '阿部　太郎', text: '阿部　太郎' },
                { value: '井手　太郎', text: '井手　太郎' },
                { value: '鵜飼　太郎', text: '鵜飼　太郎' },
                { value: '江田山　太郎', text: '江田山　太郎' },
                { value: '小野　太郎', text: '小野　太郎' }
            ],

            selected_3: null,
            evaluator: [
                { value: null, text: '評価者' },
                { value: 'a', text: '植野　広' },
                { value: 'b', text: '中村　花子' }
            ],

            selected_4: null,
            state: [
                { value: null, text: '状態' },
                { value: 'a', text: '一次評価待ち' },
                { value: 'b', text: '二次評価待ち' },
                { value: 'c', text: '評価完了' },
                { value: 'd', text: '目標設定差し戻し' }
            ],
        }
    },
    computed:{
        filter:function(){
            return this.selected_1
        }
    },
  };
</script>

<style>
.sheetlist-sec1 {
    margin: 30px 0 15px;
    padding: 10px;
}

.sheetlist-table {
    margin: 30px 0 15px;
    padding: 10px;
}
</style>
