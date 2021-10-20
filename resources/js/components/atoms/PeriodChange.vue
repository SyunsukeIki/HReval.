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
            <div class="start" style="margin-bottom: 10px; width:70%;">
                <b-badge variant="info"><span class="badge-size">開始日</span></b-badge>
                <b-input-group class="mb-3">
                  <b-form-input
                    id="example-input1"
                    v-model="value_start"
                    type="text"
                    placeholder="YYYY-MM-DD"
                    autocomplete="off"
                  ></b-form-input>
                  <b-input-group-append>
                    <b-form-datepicker
                      v-model="value_start"
                      button-only
                      right
                      locale="en-US"
                      aria-controls="example-input1"
                      @context="onContext"
                    ></b-form-datepicker>
                  </b-input-group-append>
                </b-input-group>
            </div>
            <div class="start" style="margin-bottom: 10px; width:70%;">
                <b-badge variant="info"><span class="badge-size">終了日</span></b-badge>
                <b-input-group class="mb-3">
                  <b-form-input
                    id="example-input2"
                    v-model="value_end"
                    type="text"
                    placeholder="YYYY-MM-DD"
                    autocomplete="off"
                  ></b-form-input>
                  <b-input-group-append>
                    <b-form-datepicker
                      v-model="value_end"
                      button-only
                      right
                      locale="en-US"
                      aria-controls="example-input2"
                      @context="onContext"
                    ></b-form-datepicker>
                  </b-input-group-append>
                </b-input-group>      
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
                value_start: '2021/04/01',
                value_end:'2021/09/30',           
            }

        },
    };
</script>

<style>
.input{
    width: 60%;
}


</style>