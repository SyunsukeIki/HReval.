<template>
    <div class="memo">
        <b-modal :id=period_change_modal_id title="評価期間編集" hide-footer size="lg">
            <div class="start" style="margin-bottom: 10px;">
                <b-badge variant="info"><span class="badge-size" style="margin-left: 7px; margin-right:7px;">年度</span></b-badge>
                <b-form-input class="input" :value="year"></b-form-input>
            </div>
            <div class="start" style="margin-bottom: 20px;">
                <b-badge variant="info" ><span class="badge-size" style="margin-left: 14px; margin-right:14px;">期</span></b-badge>
                <b-form-input  class="input" :value="period"></b-form-input>
            </div>
            <div class="start" style="margin-bottom: 10px;">
                <b-badge variant="info"><span class="badge-size">開始日</span></b-badge>
                <b-form-input class="input" :value="start_date"></b-form-input>
            </div>
            <div class="start" style="margin-bottom: 10px;">
                <b-badge variant="info"><span class="badge-size">終了日</span></b-badge>
                <b-form-input class="input" :value="end_date"></b-form-input>
       
            </div>
            <b-container class="bv-example-row">
                <b-row align-h="end">
                    <b-col cols="2"><b-button class="mt-1" block @click="$bvModal.hide('bv-modal-example')" variant="primary">保存</b-button></b-col>
                </b-row>
            </b-container>
        </b-modal>
    </div>
</template>

<script>
    export default {
        name: 'period-change',
        props:{
            period_change_modal_id:null,
        },
        data() {
            return {
                year: '2021',
                period: '上期',
                start_date:'2021/04/01',
                end_date:'2021/09/30',
                value: '',
                formatted: '',
                selected: ''
                
            }

        },
        methods: {
          onContext(ctx) {
            // The date formatted in the locale, or the `label-no-date-selected` string
            this.formatted = ctx.selectedFormatted
            // The following will be an empty string until a valid date is entered
            this.selected = ctx.selectedYMD
          }
        }
    };
</script>

<style>
.input{
    width: 60%;
}


</style>