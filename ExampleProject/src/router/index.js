// Composables
import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: "/",
    name: "Home",
    component: () => import("@/layouts/default/Default.vue"),
    children: [
      {
        path: "/",
        name: "Home",
        component: () => import("@/views/Home.vue"),
      },
      {
        path: "/page1",
        name: "Page 1",
        component: () => import("@/views/Page1.vue"),
      },
      {
        path: "/index",
        name: "index",
        component: () => import("@/views/Index.vue"),
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
