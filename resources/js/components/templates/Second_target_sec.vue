<template>
    <div class="sec-content">
                <b-row>
            <b-col cols="10">
                <b-button variant="primary" v-b-toggle.collapse-2 class="m-1" size="sm" pill>
                    <span class="when-open">－</span><span class="when-closed">＋</span>
                </b-button>
                 <b-badge variant="info" >
                <span class="badge-size">項目名</span></b-badge><span class="label-text">リーダーが数字を把握しているのかどうか</span>
            </b-col>
            <b-col class="text-right">
                <b-button variant="outline-info" v-b-modal.second_target_memo><b-icon icon="journal-text" aria-hidden="true"></b-icon> MEMO</b-button>
            </b-col>     
        </b-row>    
        <b-collapse id="collapse-2" class="mt-2">
            <b-card>
                <b-badge variant="info" ><span class="badge-size">項目概要</span></b-badge>
                <p class="card-text">【4年目以降】後輩と現場に入る<br>【3年目】後輩の指導ができる<br>【2年目】後輩の面倒をみれる（相談相手になる）<br>【1年目】自分のことがきちんとできる（基本のルール）・社員としての基本 </p>
            </b-card>
        </b-collapse>
        <b-collapse id="collapse-2" class="mt-2">
            <b-card>
                <b-badge variant="info" ><span class="badge-size">項目内容</span></b-badge>
                <p>自分のことがきちんとできるようになる。社員としての基本を身につける。</p>
            </b-card>
        </b-collapse>
    </div>
</template>

<script>
    import '../../../css/evaluation_sheet.css';
    export default {
        name: 'second-target-sec',
        data() {
            return {
            }
        },
    };
</script>

