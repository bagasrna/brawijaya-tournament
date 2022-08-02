<template>
    <div>
        <Sidebar />
        <Content title="Cabang Lomba">
            <div class="container_lomba">
                <div class="card__">
                    <img class="thumbnail__" src="../../../assets/catur.png" alt srcset />
                    <h4>Catur</h4>
                    <div class="content__">
                        <div
                            v-if="data.catur"
                            style="display: flex;flex-direction: column;padding: 8px;box-sizing: border-box;"
                        >
                            <p
                                v-if="data.catur.status == 'draft'"
                            >Telah Mendaftar dan Formulir belum dikirim</p>
                            <p
                                v-else-if="data.catur.status == 'sended' && data.catur.team_verified_at"
                            >Formulir Terverifikasi</p>
                            <p v-else>Formulir telah dikirim</p>
                            <div
                                class="mt-2 d-flex align-items-center"
                                style="justify-content: space-evenly;"
                            >
                                <Button
                                    @click="$router.push('/dashboard/catur')"
                                    style="display: block;width: 85%;"
                                >Lihat Formulir</Button>
                                <Button
                                    v-if="data.catur.status == 'draft'"
                                    @click="deleteCompetition(data.catur.id)"
                                    icon="ios-trash"
                                    type="error"
                                    ghost
                                ></Button>
                            </div>
                        </div>
                        <Button v-else @click="showCaturTeam=true">Daftar Sekarang</Button>
                    </div>
                </div>
                <div class="card__">
                    <img class="thumbnail__" src="../../../assets/padus.png" alt srcset />
                    <h4>Paduan Suara</h4>
                    <div class="content__">
                        <div
                            v-if="data.padus"
                            style="display: flex;flex-direction: column;padding: 8px;box-sizing: border-box;"
                        >
                            <p
                                v-if="data.padus.status == 'draft'"
                            >Telah Mendaftar dan Formulir belum dikirim</p>
                            <p
                                v-else-if="data.padus.status == 'sended' && data.padus.team_verified_at"
                            >Formulir Terverifikasi</p>
                            <p v-else>Formulir telah dikirim</p>
                            <div
                                class="mt-2 d-flex align-items-center"
                                style="justify-content: space-evenly;"
                            >
                                <Button
                                    @click="$router.push('/dashboard/paduan-suara')"
                                    style="display: block;width: 85%;"
                                >Lihat Formulir</Button>
                                <Button
                                    v-if="data.padus.status == 'draft'"
                                    @click="deleteCompetition(data.padus.id)"
                                    icon="ios-trash"
                                    type="error"
                                    ghost
                                ></Button>
                            </div>
                        </div>
                        <Button v-else @click="showPadusTeam=true">Daftar Sekarang</Button>
                    </div>
                </div>
                <div class="card__">
                    <img class="thumbnail__" src="../../../assets/pubg.png" alt srcset />
                    <h4>PUBG</h4>
                    <div class="content__">
                        <div
                            v-if="data.pubg"
                            style="display: flex;flex-direction: column;padding: 8px;box-sizing: border-box;"
                        >
                            <p
                                v-if="data.pubg.status == 'draft'"
                            >Telah Mendaftar dan Formulir belum dikirim</p>
                            <p
                                v-else-if="data.pubg.status == 'sended' && data.pubg.team_verified_at"
                            >Formulir Terverifikasi</p>
                            <p v-else>Formulir telah dikirim</p>
                            <div
                                class="mt-2 d-flex align-items-center"
                                style="justify-content: space-evenly;"
                            >
                                <Button
                                    @click="$router.push('/dashboard/pubg')"
                                    style="display: block;width: 85%;"
                                >Lihat Formulir</Button>
                                <Button
                                    v-if="data.pubg.status == 'draft'"
                                    @click="deleteCompetition(data.pubg.id)"
                                    icon="ios-trash"
                                    type="error"
                                    ghost
                                ></Button>
                            </div>
                        </div>
                        <Button v-else @click="showPubgTeam=true">Daftar Sekarang</Button>
                    </div>
                </div>
                <div class="card__">
                    <img
                        class="thumbnail__"
                        src="../../../assets/ml.png"
                        alt
                        srcset
                        style="transform: translateY(-15px);"
                    />
                    <h4>Mobile Legends</h4>
                    <div class="content__">
                        <div
                            v-if="data.ml"
                            style="display: flex;flex-direction: column;padding: 8px;box-sizing: border-box;"
                        >
                            <p
                                v-if="data.ml.status == 'draft'"
                            >Telah Mendaftar dan Formulir belum dikirim</p>
                            <p
                                v-else-if="data.ml.status == 'sended' && data.ml.team_verified_at"
                            >Formulir Terverifikasi</p>
                            <p v-else>Formulir telah dikirim</p>
                            <div
                                class="mt-2 d-flex align-items-center"
                                style="justify-content: space-evenly;"
                            >
                                <Button
                                    @click="$router.push('/dashboard/mobile-legends')"
                                    style="display: block;width: 85%;"
                                >Lihat Formulir</Button>
                                <Button
                                    @click="deleteCompetition(data.ml.id)"
                                    v-if="data.ml.status == 'draft'"
                                    icon="ios-trash"
                                    type="error"
                                    ghost
                                ></Button>
                            </div>
                        </div>
                        <Button v-else @click="showMlTeam=true">Daftar Sekarang</Button>
                    </div>
                </div>
                <div class="card__">
                    <img
                        class="thumbnail__"
                        src="../../../assets/sinematografi.png"
                        alt
                        srcset
                        style="transform: translateY(-10px);"
                    />
                    <h4>Sinematografi</h4>
                    <div class="content__">
                        <div
                            v-if="data.sinematografi"
                            style="display: flex;flex-direction: column;padding: 8px;box-sizing: border-box;"
                        >
                            <p
                                v-if="data.sinematografi.status == 'draft'"
                            >Telah Mendaftar dan Formulir belum dikirim</p>
                            <p
                                v-else-if="data.sinematografi.status == 'sended' && data.sinematografi.team_verified_at"
                            >Formulir Terverifikasi</p>
                            <p v-else>Formulir telah dikirim</p>
                            <div
                                class="mt-2 d-flex align-items-center"
                                style="justify-content: space-evenly;"
                            >
                                <Button
                                    @click="$router.push('/dashboard/sinematografi')"
                                    style="display: block;width: 85%;"
                                >Lihat Formulir</Button>
                                <Button
                                    @click="deleteCompetition(data.sinematografi.id)"
                                    v-if="data.sinematografi.status == 'draft'"
                                    icon="ios-trash"
                                    type="error"
                                    ghost
                                ></Button>
                            </div>
                        </div>
                        <Button v-else @click="showSinematografiTeam=true">Daftar Sekarang</Button>
                    </div>
                </div>
            </div>
        </Content>

        <!-- Modal -->
        <ModalMLTeam :showModal="showMlTeam" @change="(e)=>showMlTeam = e" />
        <ModalPubgTeam :showModal="showPubgTeam" @change="(e)=>showPubgTeam = e" />
        <ModalSinematografiTeam
            :showModal="showSinematografiTeam"
            @change="(e)=>showSinematografiTeam = e"
        />
        <ModalPadusTeam :showModal="showPadusTeam" @change="(e)=>showPadusTeam = e" />
        <ModalCaturTeam :showModal="showCaturTeam" @change="(e)=>showCaturTeam = e" />
    </div>
</template>

<style lang="scss" scoped>
.container_lomba {
    display: grid;
    padding: 0 50px;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 18px;
    padding-bottom: 50px;

    .card__ {
        position: relative;

        border-radius: 4px;
        overflow: hidden;
        background-color: #fff;

        .thumbnail__ {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        h4 {
            position: absolute;
            top: 119px;
            left: 18px;
            color: black;
        }
        .content__ {
            display: grid;
            justify-content: center;
            align-items: center;
            min-height: 100px;
        }
    }
}
</style>

<script>
import Sidebar from "../../components/user/Sidebar";
import Content from "../../components/user/Content";
import ModalMLTeam from "../../components/user/ModalMLTeam";
import ModalPubgTeam from "../../components/user/ModalPubgTeam";
import ModalSinematografiTeam from "../../components/user/ModalSinematografiTeam";
import ModalPadusTeam from "../../components/user/ModalPadusTeam";
import ModalCaturTeam from "../../components/user/ModalCaturTeam";

export default {
    data() {
        return {
            showMlTeam: false,
            showPubgTeam: false,
            showSinematografiTeam: false,
            showPadusTeam: false,
            showCaturTeam: false,
            data: {
                ml: null,
                pubg: null,
                padus: null,
                catur: null,
                sinematografi: null,
            },
        };
    },

    created() {
        this.getData();
    },

    methods: {
        async getData() {
            var res = await this.callApi("get", "/client/competition");

            if (res.status == 200) {
                this.data.pubg = res.data.find(({ type }) => type == "pubg");
                this.data.ml = res.data.find(({ type }) => type == "ml");
                this.data.padus = res.data.find(({ type }) => type == "padus");
                this.data.catur = res.data.find(({ type }) => type == "catur");
                this.data.sinematografi = res.data.find(
                    ({ type }) => type == "sinematografi"
                );
            }
        },
        deleteCompetition(id) {
            this.$Modal.confirm({
                title: "Hapus Formulir Lomba?",
                onOk: async () => {
                    var res = await this.callApi(
                        "delete",
                        `/client/competition/${id}`
                    );

                    if (res.status == 200) {
                        this.$Message.info("Formulir berhasi dihapus");
                        this.getData();
                    }
                },
                onCancel: () => {
                    return;
                },
            });
        },
    },
    components: {
        Sidebar,
        Content,
        ModalMLTeam,
        ModalPubgTeam,
        ModalSinematografiTeam,
        ModalPadusTeam,
        ModalCaturTeam,
    },
};
</script>
