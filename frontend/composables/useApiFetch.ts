export function useApiFetch<T>(path: string, options: UseFetchOptions<T> = {}) {

  const config = useRuntimeConfig()

  let headers: any = {}

  const token = useCookie('XSRF-TOKEN');

  if (token.value) {
    headers['X-XSRF-TOKEN'] = token.value as string;
  }

  headers['Accept'] = 'application/json';
  headers['Referer'] = 'codecv3.localhost.apple.com';

  if (process.server) {
    headers = {
      ...headers,
      ...useRequestHeaders(["cookie"]),
      referer: config.public.baseUrl + ':54345',
    }
  }

  return useFetch(config.public.baseUrl + path, {
    credentials: 'include',
    watch: false,
    ...options,
    headers: {
      ...headers,
      ...options?.headers
    }
  });
}
