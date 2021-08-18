<template>
    <div class="sec-content">
        <!-- Using modifiers -->
        <b-button variant="primary" v-b-toggle.collapse-2 class="m-1">+</b-button>

        <b-badge pill variant="info">項目名</b-badge><span class="label-text">リーダーが数字を把握しているのかどうか</span>

        <!-- ここにMemo_Num.vueを呼び出す -->
        <memo-num />

        <!-- Element to collapse -->
        <b-collapse id="collapse-2" class="mt-2">
            <b-card>
                <b-badge pill variant="info">項目概要</b-badge>
                <p class="card-text">自分自身の売上達成率で計算して下さい。 病気などによる長期離脱やその他イレギュラーによる未達は都度考慮します。</p>
            </b-card>
        </b-collapse>
        <b-collapse id="collapse-2" class="mt-2">
            <b-card>
                <b-badge pill variant="info">尺度</b-badge>
                <p><b-table striped bordered outlined small fixed :items="items" :fields="fields"></b-table></p>
            </b-card>
        </b-collapse>
    </div>
</template>

<script>
    import MemoNum from '../atoms/Memo_Num.vue';

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