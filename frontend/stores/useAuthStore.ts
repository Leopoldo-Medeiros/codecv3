import { defineStore } from 'pinia'
import { useApiFetch } from '~/composables/useApiFetch'

type User = {
  id: number;
  name: string;
  email: string;
  roles: object;
  admin: boolean;
}

type Credentials = {
  email: string;
  password: string;
}

type RegistrationInfo = {
  name: string;
  email: string;
  password: string;
  password_confirmation: string;
}

export const useAuthStore = defineStore('auth', () => {
  const user = ref<User | null>(null)
  const isLoggedIn = computed(() => !!user.value)
  const isAdmin = computed(() => !!user.value.admin)

  async function logout() {
    await useApiFetch("/logout", {method: "POST"});
    user.value = null;
    navigateTo("/login");
  }

  async function fetchUser() {
    const {data, error} = await useApiFetch("/api/user");
    user.value = data.value as User;
  }

  async function login(credentials: Credentials) {
    await useApiFetch("/sanctum/csrf-cookie");

    const login = await useApiFetch("/login", {
      method: "POST",
      body: credentials,
    });

    await fetchUser();

    console.log('user', user.value.id)
    console.log('isLoggedIn', isLoggedIn)
    console.log('isAdmin', isAdmin)

    if (isLoggedIn) {
      // navigateTo("/cms");
    }

    return login;
  }

  async function register(info: RegistrationInfo) {
    await useApiFetch("/sanctum/csrf-cookie");

    const register = await useApiFetch("/register", {
      method: "POST",
      body: info,
    });

    await fetchUser();

    return register;
  }

  return {user, login, isLoggedIn, fetchUser, logout, register}
})
