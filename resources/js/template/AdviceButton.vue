<template>
    <div class="memo">
        <b-button v-b-modal="input_modal_id" variant="info">アドバイス入力</b-button>
        <b-modal :id=input_modal_id title="中間面談　アドバイス記入" hide-footer>
            <b-badge pill variant="info">目標項目</b-badge><p>①リーダーが数字を把握しているのかどうか。</p>
            <b-badge pill variant="info">目標内容</b-badge>
            <p>数字を毎月確認を行いメモを残す。メモを残した際に次のアクションを考える</p>
            <hr>
            <b-badge pill variant="info">アドバイス記入欄</b-badge>
            <template>
                <div>
                    <b-form-textarea
                    id="textarea"
                    v-model="input_text"
                    placeholder="アドバイスを記入"
                    rows="3"
                    max-rows="6"
                    ></b-form-textarea>

                    <pre class="mt-3 mb-0">{{ input_text }}</pre>
                </div>
            </template>

            <!-- 登録ボタンの右寄せ -->
            <b-container class="bv-example-row">
                <b-row>
                    <b-col></b-col>
                    <b-col></b-col>
                    <b-col><b-button class="mt-3" block @click="$bvModal.hide('bv-modal-example')" variant="primary">登録</b-button></b-col>
                </b-row>
            </b-container>

        </b-modal>
        <b-button v-b-modal="disp_modal_id" variant="info">中間アドバイス表示</b-button>

        <b-modal :id=disp_modal_id title="中間面談　アドバイス" hide-footer>
            <b-badge pill variant="info">目標項目</b-badge><p>①リーダーが数字を把握しているのかどうか。</p>
            <b-badge pill variant="info">目標内容</b-badge>
            <p>数字を毎月確認を行いメモを残す。メモを残した際に次のアクションを考える</p>
            <hr>
            <b-badge pill variant="info">アドバイス</b-badge>
            <p class="record">評価者：中村太郎　2021/07/21</p>
            <p>ここにアドバイスを表示する</p>
        </b-modal>
    </div>
</template>

<script>
    export default {
        name: 'advice-button',
        props:{input_modal_id:null,
                disp_modal_id:null,
        },
        data() {
            return {
                input_text: "",
            }
        },
    };
</script>

<style>
.record {
    color: gray;
}
</style>