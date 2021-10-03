<template>
    <div class="memo">
        <b-modal :id=memo_modal_id title="MEMO" hide-footer size="lg">
            <b-badge variant="info"><span class="badge-size">目標項目</span></b-badge>
            <p class="label-text">{{memo_item}}</p>
            <div>
                <b-badge variant="info"><span class="badge-size">目標内容</span></b-badge>
                <p class="label-text">{{memo_item_detail}}</p>
            </div>
            <hr>
            <b-badge variant="info"><span class="badge-size">メモ一覧</span></b-badge>
            <template>
                <div>
                    <b-table bordered :items="items" :fields="fields"></b-table>
                </div>
            </template>
            <hr>
            <template>
                <div class="memo-textarea">
                    <b-form-textarea
                    id="textarea"
                    v-model="text"
                    placeholder="メモを記入してください"
                    rows="3"
                    max-rows="6"
                    ></b-form-textarea>
                    <pre class="mt-3 mb-0">{{ text }}</pre>
                </div>
            </template>

            <!-- 登録ボタンの右寄せ -->
            <b-container class="bv-example-row">
                <b-row align-h="end">
                    <b-col cols="2"><b-button class="mt-1" block @click="$bvModal.hide('bv-modal-example')" variant="primary">登録</b-button></b-col>
                </b-row>
            </b-container>
        </b-modal>
    </div>
</template>

<script>
    export default {
        name: 'memo',
        props:{
            memo_modal_id:null,
            memo_item:null,
            memo_item_detail:null,
        },
        data() {
            return {
                fields: [{ key: 'name', label: '投稿者' },{ key: 'memo', label: 'メモ' },{ key: 'date', label: '投稿日' }],
                items: [
                { name: '山田太郎', memo: 'ここにメモを表示', date: '20xx年xx月xx日' },
                { name: '山田太郎', memo: 'ここにメモを表示', date: '20xx年xx月xx日' }
                ],
                text:"",
            }
        }
    };
</script>