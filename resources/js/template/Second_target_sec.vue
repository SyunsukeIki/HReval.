<template>
    <div class="sec-content">
        <b-button v-b-toggle.collapse-1 variant="primary">+</b-button>

        <span class="sec-name"><b-badge pill>項目名</b-badge>リーダーが数字を把握しているのかどうか</span>
        <div class="memo">
            <b-button variant="info" v-b-modal.modal-1><b-icon icon="journal-text" aria-hidden="true"></b-icon></b-button>
            <b-modal id="modal-1" title="BootstrapVue" hide-footer>
                <p class="memo-area">this is memo 2</p>
                <b-button class="mt-3" block @click="$bvModal.hide('bv-modal-example')">Close Me</b-button>
            </b-modal>
        </div>

        <b-collapse id="collapse-1" class="mt-2">
            <b-card>
                <b-badge pill>項目概要</b-badge>
                <p class="card-text">【4年目以降】後輩と現場に入る<br>【3年目】後輩の指導ができる<br>【2年目】後輩の面倒をみれる（相談相手になる）<br>【1年目】自分のことがきちんとできる（基本のルール）・社員としての基本 </p>
            </b-card>
        </b-collapse>
        <b-collapse id="collapse-1" class="mt-2">
            <b-card>
                <b-badge pill>項目内容</b-badge>
                <p>自分のことがきちんとできるようになる。社員としての基本を身につける。</p>
            </b-card>
        </b-collapse>
    </div>
</template>

<script>
    export default {
        name: 'second-target-sec',
    };
</script>