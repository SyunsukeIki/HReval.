<template>
    <div class="memo">
            <div>
                <b-button pill variant="outline-info" v-b-modal.my-modal><b-icon icon="journal-text" aria-hidden="true"></b-icon></b-button>
                <b-modal id="my-modal" title="メモ" hide-footer>
                    <b>①在籍年数毎に求めるもの</b>
            <br>
            <b-badge pill variant="info">目標内容</b-badge>
            <p>自分のことがきちんとできるようになる。社員としての基本を身につける。</p>
            <hr>
            <b-badge pill variant="info">メモ一覧</b-badge>
            <template>
                <div>
                    <b-table bordered :items="items" :fields="fields" :head-variant="headVariant"></b-table>
                </div>
            </template>
            <hr>
            <template>
                <div>
                    <b-form-textarea
                    id="textarea"
                    v-model="text"
                    placeholder="Enter something..."
                    rows="3"
                    max-rows="6"
                    ></b-form-textarea>

                    <pre class="mt-3 mb-0">{{ text }}</pre>
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
            </div>
        </div>
</template>

<script>
    export default {
        name: 'memo-first',
        data() {
            return {
                fields: [{ key: 'name', label: '投稿者' },{ key: 'memo', label: 'メモ' },{ key: 'date', label: '投稿日' }],
                items: [
                { name: '山田太郎', memo: 'ここにメモを表示', date: '20xx年xx月xx日' },
                { name: '山田太郎', memo: 'ここにメモを表示', date: '20xx年xx月xx日' }
                ],
                headVariant: ['light']
            }
        }
    };
</script>