<template>
        <article>
            <h1 class="title">グループ編集</h1>
            <section>
                <div class="sec-content">
                        <div>
                            <b-badge variant="info"><span class="badge-size">グループリスト</span></b-badge>
                            <div class="card1" style="width: 90%;">
                                <b-form-checkbox  :key="groupkind" v-for="groupkind in groupkinds"
                                id="checkbox-1"
                                v-model="status"
                                name="checkbox-1"
                                :value="groupkind"
                                unchecked-value=""
                                button 
                                button-variant="success"
                                class="checkbox"
                                >{{groupkind}}
                                </b-form-checkbox>
                                <button type="button" class="btn m-1 btn-primary btn-sm rounded-pill" @click="modeChange"><span>＋</span></button>
                            </div>
                        </div>
                        <div class="start" style="width:60%; margin: 40px 0 40px 0 ;">
                            <b-badge variant="info"><span class="badge-size">グループ名</span></b-badge>
                            <b-form-input v-if="addMode" v-model="text2" class="input2"></b-form-input>
                            <b-form-input v-else class="input2" :value="status"></b-form-input>
                        </div>
                        <div>
                            <div>
                                <b-badge variant="info"><span class="badge-size">所属ユーザー</span></b-badge>

                            </div>
                            <div v-if="addMode" class="card1" style="width: 90%;">
                                <button type="button" class="btn m-1 btn-primary btn-sm rounded-pill" v-b-modal.group_in><span>＋</span></button>                                
                            </div>
                            <div v-else class="card1" style="width: 90%;">
                                <b-badge :key="employee" v-for="employee in employees" pill variant="success" class="badge-style">
                                <span class="badge-size">{{employee}}</span><span class="badge-item">×</span></b-badge>
                                <button type="button" class="btn m-1 btn-primary btn-sm rounded-pill" v-b-modal.group_in><span>＋</span></button>                                
                            </div>
                            <group-in group_in_modal_id="group_in" />     
                        </div>
                        <div v-if="addMode" class="buttons column">
                            <b-button variant="primary" style="margin-bottom: 5px;">保存</b-button>
                            <b-button href="/group" variant="success">戻る</b-button>
                        </div>
                        <div v-else class="buttons column">
                            <b-button variant="primary" style="margin-bottom: 5px;">保存</b-button>
                            <b-button variant="danger">グループ削除</b-button>
                        </div>
                </div>
            </section> 

        </article>
</template>
<script>
  import GroupIn  from '../atoms/GroupIn.vue'; 
  
  export default {

    name: 'group',
    components: {GroupIn},
    data() {
            return{  
                selected:[],
                addMode:false, 
                status:'',
                text2:'',
                groupkinds:["システム事業部②", "プログラマ②", "課長代理①","主任①","営業②","一般社員①","営業部②","山田チーム②","課長①","サッカー部①"],
                employees:["阿部太郎","菅原道真","山田利信","川口沙也加","浜本剛"],

        }  
        
    },
    methods: {
        modeChange: function(){
        this.addMode = true
    },
  }

}
</script>
<style>
.column{
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}
.checkbox{
    margin: 2px;
    border-radius: 8px !important;
}

</style>