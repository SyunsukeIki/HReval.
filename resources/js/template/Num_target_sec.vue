<template>
    <div class="sec-content">
        <!-- Using modifiers -->
        <b-button variant="primary" v-b-toggle.collapse-2 class="m-1">+</b-button>

        <span class="sec-name"><b-badge pill>項目名</b-badge>リーダーが数字を把握しているのかどうか</span>

        <div class="memo">
            <b-button id="show-btn" variant="info" @click="$bvModal.show('bv-modal-example')"><b-icon icon="journal-text" aria-hidden="true"></b-icon></b-button>
            <b-modal id="bv-modal-example" title="BootstrapVue" hide-footer>
                <p>①在籍年数毎に求めるもの</p>
                <b-badge pill>目標内容</b-badge>
                <p>自分のことがきちんとできるようになる。社員としての基本を身につける。</p>
                <hr>
                <b-badge pill>メモ一覧</b-badge>
                <p　class="memo-area">自分のことがきちんとできるようになる。社員としての基本を身につける。</p>
                <hr>
                <p class="memo-area">This is memo3!</p>
                <b-button class="mt-3" block @click="$bvModal.hide('bv-modal-example')">Close Me</b-button>
            </b-modal>
        </div>

        <!-- Element to collapse -->
        <b-collapse id="collapse-2">
            <b-card>
                <b-badge pill>項目概要</b-badge>
                <p class="card-text">自分自身の売上達成率で計算して下さい。 病気などによる長期離脱やその他イレギュラーによる未達は都度考慮します。</p>
            </b-card>
        </b-collapse>
        <b-collapse id="collapse-2">
            <b-card>
                <b-badge pill>尺度</b-badge>
                <p><b-table striped borderless outlined small fixed :items="items" :fields="fields"></b-table></p>
            </b-card>
        </b-collapse>
    </div>
</template>

<script>
    export default {
        name: 'num-target-sec',
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
        }
    };
</script>