<template>
    <div class="sec-content">
        <b-button variant="primary" v-b-toggle.collapse-3 class="m-1" size="sm" pill>
            <span class="when-open">－</span><span class="when-closed">＋</span>
        </b-button>
        <b-badge variant="info" ><span class="badge-size">項目名</span></b-badge><span class="label-text">リーダーが数字を把握しているのかどうか</span>
        <memo-num memo3_modal_id="num_target_memo3" class="d-flex justify-content-end"/>

        <b-collapse id="collapse-3" class="mt-2">
            <b-card>
                <b-badge variant="info" ><span class="badge-size">項目概要</span></b-badge>
                <p class="card-text">自分自身の売上達成率で計算して下さい。 病気などによる長期離脱やその他イレギュラーによる未達は都度考慮します。</p>
            </b-card>
        </b-collapse>
        <b-collapse id="collapse-3" class="mt-2">
            <b-card>
                <b-badge variant="info" ><span class="badge-size">尺度</span></b-badge>
                <p><b-table striped bordered outlined small fixed :items="items" :fields="fields"></b-table></p>
            </b-card>
        </b-collapse>
    </div>
</template>

<script>
    import MemoNum from '../atoms/Memo_Num.vue';
    import '../../../css/evaluation_sheet.css';

    export default {
        name: 'num-target-sec',
        components: {MemoNum},
        data() {
            return {
                fields: [{ key: 'level', label: '段階' },{ key: 'achievement', label: '達成率' }],
                items: [
                { level: 1, achievement: '25%' },
                { level: 2, achievement: '40%' },
                { level: 3, achievement: '50%' },
                { level: 4, achievement: '60%' },
                { level: 5, achievement: '80%' },
                { level: 6, achievement: '100%' }
                ]
            }
            return {
                text: ''
            }
        }
    };
</script>

