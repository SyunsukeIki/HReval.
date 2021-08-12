<template>
    <div class="sec-content">
        <b-button v-b-toggle.collapse-1 variant="primary">+</b-button>

        <b-badge pill variant="info">項目名</b-badge><span class="label-text">リーダーが数字を把握しているのかどうか</span>
        
        <!-- ここにMemo_Num.vueを呼び出す -->
        <memo-second />

        <b-collapse id="collapse-1" class="mt-2">
            <b-card>
                <b-badge pill variant="info">項目概要</b-badge>
                <p class="card-text">【4年目以降】後輩と現場に入る<br>【3年目】後輩の指導ができる<br>【2年目】後輩の面倒をみれる（相談相手になる）<br>【1年目】自分のことがきちんとできる（基本のルール）・社員としての基本 </p>
            </b-card>
        </b-collapse>
        <b-collapse id="collapse-1" class="mt-2">
            <b-card>
                <b-badge pill variant="info">項目内容</b-badge>
                <p>自分のことがきちんとできるようになる。社員としての基本を身につける。</p>
            </b-card>
        </b-collapse>
    </div>
</template>

<script>
    import MemoSecond from './Memo_Second.vue';
    export default {
        name: 'second-target-sec',
        components: {MemoSecond},
    };
</script>