<template>
    <div>
        <Sidebar />
        <Content title="Cabang Lomba">
            <div class="card-container">
                <div class="card__">
                    <h2>Catur</h2>
                    <div class="d-flex justify-content-between">
                        <p>Pendaftar</p>
                        <p>Terverifikasi</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h3>{{catur.total}}</h3>
                        <h3>{{catur.verified}}</h3>
                    </div>
                </div>
                <div class="card__">
                    <h2>Paduan Suara</h2>
                    <div class="d-flex justify-content-between">
                        <p>Pendaftar</p>
                        <p>Terverifikasi</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h3>{{padus.total}}</h3>
                        <h3>{{padus.verified}}</h3>
                    </div>
                </div>
                <div class="card__">
                    <h2>PUBG</h2>
                    <div class="d-flex justify-content-between">
                        <p>Pendaftar</p>
                        <p>Terverifikasi</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h3>{{pubg.total}}</h3>
                        <h3>{{pubg.verified}}</h3>
                    </div>
                </div>
                <div class="card__">
                    <h2>Mobile Legends</h2>
                    <div class="d-flex justify-content-between">
                        <p>Pendaftar</p>
                        <p>Terverifikasi</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h3>{{ml.total}}</h3>
                        <h3>{{ml.verified}}</h3>
                    </div>
                </div>
                <div class="card__">
                    <h2>Sinematografi</h2>
                    <div class="d-flex justify-content-between">
                        <p>Pendaftar</p>
                        <p>Terverifikasi</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h3>{{sinematografi.total}}</h3>
                        <h3>{{sinematografi.verified}}</h3>
                    </div>
                </div>
            </div>
        </Content>
    </div>
</template>

<style lang="scss">
.card-container {
    display: flex;
    flex-wrap: wrap;
    padding: 0 50px;
    box-sizing: border-box;
    gap: 18px;

    .card__ {
        min-width: 300px;
        max-width: 400px;
        padding: 18px;
        box-sizing: border-box;
        background: white;
        border-radius: 4px;

        h2 {
            font-size: 1.5em;
        }
    }
}
</style>

<script>
import Sidebar from "../../components/admin/Sidebar";
import Content from "../../components/admin/Content";

export default {
    data() {
        return {
            pubg: {
                total: 0,
                verified: 0,
            },
            ml: {
                total: 0,
                verified: 0,
            },
            padus: {
                total: 0,
                verified: 0,
            },
            sinematografi: {
                total: 0,
                verified: 0,
            },
            catur: {
                total: 0,
                verified: 0,
            },
        };
    },
    async created() {
        var res = await this.callApi("get", "/app/overview");

        if (res.status == 200) {
            if (res.data.find(({ type }) => type == "catur"))
                this.catur = res.data.find(({ type }) => type == "catur");
            if (res.data.find(({ type }) => type == "pubg"))
                this.pubg = res.data.find(({ type }) => type == "pubg");
            if (res.data.find(({ type }) => type == "padus"))
                this.padus = res.data.find(({ type }) => type == "padus");
            if (res.data.find(({ type }) => type == "ml"))
                this.ml = res.data.find(({ type }) => type == "ml");
            if (res.data.find(({ type }) => type == "sinematografi"))
                this.sinematografi = res.data.find(
                    ({ type }) => type == "sinematografi"
                );
        }
    },
    components: {
        Sidebar,
        Content,
    },
};
</script>
