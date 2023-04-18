export default {
  server: {
    hmr: {
      protocol: 'ws',
      host: '172.22.0.5',
      clientPort: 54276,
      port: 54276
    },
    ports:
      - "54276:54276"
  }
}
