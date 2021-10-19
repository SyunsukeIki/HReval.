<template>
        <article>
            <h1 class="title">評価期間設定</h1>    
            <h2 class="title2">評価期間一覧</h2>     
            <div class="sheetlist-table">
                <b-table striped hover :items="items" :fields="fields">         
                        <template #cell(isEdit)>
                            <div>
                                <b-button variant="info" v-b-modal.period_change>編集</b-button>
                            </div>
                        </template>  
                        <template #cell(mark)>
                            <span style="margin">～</span>
                        </template>
                </b-table>
                <div class="button1">
                    <div style="margin-right: 140px;">
                        <button type="button" class="btn m-1 btn-primary btn-sm rounded-pill" v-b-modal.period_add ><span>＋</span></button>
                    </div>
                </div>
            </div>
        <period-change period_change_modal_id="period_change" />
        <period-add period_add_modal_id="period_add" />
        </article>
</template>

<script>
  import PeriodChange  from '../atoms/PeriodChange.vue'; 
  import PeriodAdd  from '../atoms/PeriodAdd.vue'; 
  export default {
    name: 'period-edit',
    components: {PeriodChange, PeriodAdd},
    data() {
        return {
            fields: [
            { key: 'year', label: '年度',},
            { key: 'period', label: '期',},
            { key: 'start_date', label: '開始日',},
            { key: 'mark', label: '',},
            { key: 'end_date', label: '終了日', },
            { key: 'isEdit', label: '',},
            ],
            items: [
            { year: '2021', period: '上期',   start_date: '2021/04/01', mark:'',  end_date: '2021/09/30', isEdit: true},
            { year: '2021', period: '下期',   start_date: '2021/10/01', mark:'',  end_date: '2021/03/31', isEdit: true},
            { year: '2022', period: '上期',   start_date: '2021/04/01', mark:'',  end_date: '2021/09/30', isEdit: true},
            { year: '2022', period: '下期',   start_date: '2021/10/01', mark:'',  end_date: '2021/03/31', isEdit: true},
            { year: '2023', period: '上期',   start_date: '2021/04/01', mark:'',  end_date: '2021/09/30', isEdit: true},
            { year: '2023', period: '下期',   start_date: '2021/10/01', mark:'',  end_date: '2021/03/31', isEdit: true},
            ],
        }
    },

    mounted() {
      this.totalRows = this.items.length
    },
  }
</script>

<style>
section {
   display: flex;
   flex-direction: column;
}
.title{
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    margin-top : 25px;
    font-size: 32px;
    color: #807e7e;
    line-height: 46px;
}
.title2{
    font-family: 'Nunito Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 24px;
    color: #807e7e;    
}
.button1{
    display: flex;
    justify-content: flex-end;
    padding-bottom: 18px;
    border-bottom: 1px solid #dbdbdc;
}

</style>