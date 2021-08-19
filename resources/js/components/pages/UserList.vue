<template>
    <div class="sheetlist-sec1">
        <b-container class="bv-example-row">
            <b-row>
                <b-col><b-form-select v-model="selected_1" :options="employee" ></b-form-select></b-col>
                <b-col><b-form-select v-model="selected_2" :options="division" ></b-form-select></b-col>
                <b-col><b-form-select v-model="selected_3" :options="job_category" ></b-form-select></b-col>
                <b-col><b-form-select v-model="selected_4" :options="officer" ></b-form-select></b-col>
            </b-row>
        </b-container>

        <hr class="my-4">

        <div class="sheetlist-table">
            <b-table striped hover :items="items" :fields="fields">
                <template #cell(isImage)="row">
                    <div>
                        <b-img src="/images/user.svg" width="50px" v-if="row.value"></b-img>
                    </div>
                </template>
            </b-table>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'user-list',
    data() {
        return {
            fields: [
            { key: 'isImage', label: '' },
            { key: 'employee', label: 'ユーザー名' },
            { key: 'division', label: '事業部' },
            { key: 'job_category', label: '職種' },
            { key: 'officer', label: '役職' }
            ],
            items: [
            { isImage: true, employee: '阿部太郎', division: 'システム事業部', job_category: 'プログラマ（社外事業）', officer: '一般社員' },
            { isImage: true, employee: '阿部太郎', division: 'システム事業部', job_category: 'プログラマ（社外事業）', officer: 'リーダー' },
            { isImage: true, employee: '鵜飼太郎', division: 'システム事業部', job_category: 'プログラマ（社外事業）', officer: '課長' },
            { isImage: true, employee: '江田山太郎', division: 'システム事業部', job_category: 'プログラマ（社外事業）', officer: '部長' },
            { isImage: true, employee: '小野太郎', division: '制作事業部', job_category: 'デザイナー（社内事業）', officer: '新入社員' }
            ],

            selected_1: null,
            employee: [
            { value: null, text: 'ユーザー名' },
            { value: 'a', text: '阿部 太郎' },
            { value: 'b', text: '井手 太郎' },
            { value: 'c', text: '鵜飼 太郎' },
            { value: 'd', text: '江田山 太郎' },
            { value: 'e', text: '小野 太郎' }
            ],

            selected_2: null,
            division: [
            { value: null, text: '事業部名' },
            { value: 'a', text: 'システム事業部' },
            { value: 'b', text: '制作事業部', }
            ],

            selected_3: null,
            job_category: [
            { value: null, text: '職種' },
            { value: 'a', text: 'プログラマ（社外事業）' },
            { value: 'b', text: 'デザイナー（社内事業）' }
            ],

            selected_4: null,
            officer: [
            { value: null, text: '役職' },
            { value: 'a', text: '一般社員' },
            { value: 'b', text: 'リーダー' },
            { value: 'c', text: '課長' },
            { value: 'd', text: '部長' },
            { value: 'e', text: '新入社員' }
            ]
        }
    },
  };
</script>

<style>
.sheetlist-sec1 {
    margin: 30px 0 15px;
    padding: 10px;
}

.sheetlist-table {
    margin: 30px 0 15px;
    padding: 10px;
}
</style>