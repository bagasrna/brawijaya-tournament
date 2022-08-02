import Router from "vue-router";
import Vue from "vue";

Vue.use(Router);

import adminDashboard from "./pages/admin/Dashboard";
import adminMobileLegends from "./pages/admin/MobileLegends";
import adminCatur from "./pages/admin/Catur";
import adminPaduanSuara from "./pages/admin/PaduanSuara";
import adminPUBG from "./pages/admin/PUBG";
import adminSinematografi from "./pages/admin/Sinematografi";
import adminPengumuman from "./pages/admin/Pengumuman";
import adminBerita from "./pages/admin/Berita";
import adminGaleri from "./pages/admin/Galeri";
import adminKlasemen from "./pages/admin/Klasemen";
import adminCreatePengumuman from "./pages/admin/CreatePengumuman";
import adminCreateBerita from "./pages/admin/CreateBerita";
import adminJadwal from "./pages/admin/Jadwal";

import userDashboard from "./pages/user/Dashboard";
import userPengumuman from "./pages/user/Pengumuman";
import userMobileLegends from "./pages/user/MobileLegends";
import userPUBG from "./pages/user/PUBG";
import userPaduanSuara from "./pages/user/PaduanSuara";
import userSinematografi from "./pages/user/Sinematografi";
import userCatur from "./pages/user/Catur";
import userDetailPengumuman from "./pages/user/DetailPengumuman";

const routes = [
    {
        name: "Dashboard Admin",
        path: "/admin",
        component: adminDashboard
    },
    {
        name: "Dashboard",
        path: "/admin/dashboard",
        component: adminDashboard
    },
    {
        name: "Pengumuman",
        path: "/admin/pengumuman",
        component: adminPengumuman
    },
    {
        name: "Mobile Legends",
        path: "/admin/mobile-legends",
        component: adminMobileLegends
    },
    {
        name: "Catur",
        path: "/admin/catur",
        component: adminCatur
    },
    {
        name: "Paduan Suara",
        path: "/admin/paduan-suara",
        component: adminPaduanSuara
    },
    {
        name: "PUBG",
        path: "/admin/pubg",
        component: adminPUBG
    },
    {
        name: "Sinematografi",
        path: "/admin/sinematografi",
        component: adminSinematografi
    },
    {
        name: "Berita",
        path: "/admin/berita",
        component: adminBerita
    },
    {
        name: "Galeri",
        path: "/admin/galeri",
        component: adminGaleri
    },
    {
        name: "Klasemen",
        path: "/admin/klasemen",
        component: adminKlasemen
    },
    {
        name: "Jadwal",
        path: "/admin/jadwal",
        component: adminJadwal
    },
    {
        name: "createPengumuman",
        path: "/admin/pengumuman/:id/edit",
        component: adminCreatePengumuman
    },
    {
        name: "createBerita",
        path: "/admin/berita/:id/edit",
        component: adminCreateBerita
    },

    // User
    {
        path: "/dashboard",
        component: userDashboard
    },
    {
        path: "/dashboard/pengumuman",
        component: userPengumuman
    },
    {
        path: "/dashboard/mobile-legends",
        component: userMobileLegends
    },
    {
        path: "/dashboard/pubg",
        component: userPUBG
    },
    {
        path: "/dashboard/paduan-suara",
        component: userPaduanSuara
    },
    {
        path: "/dashboard/sinematografi",
        component: userSinematografi
    },
    {
        path: "/dashboard/catur",
        component: userCatur
    },
    {
        name: "userDetailPengumuman",
        path: "/dashboard/pengumuman/:slug",
        component: userDetailPengumuman
    }
];

export default new Router({
    mode: "history",
    routes
});
