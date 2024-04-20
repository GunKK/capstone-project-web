import axiosClient from './axiosClient';

const authApi = {
  register: (data) => {
    const url = 'auth/register';
    return axiosClient.post(url, data);
  },
  login: (data) => {
    const url = 'auth/login';
    return axiosClient.post(url, data);
  },
  getRefreshToken: () => {
    const url = 'auth/refresh-token';
    return axiosClient.post(url);
  },
  me: () => {
    const url = 'auth/me';
    return axiosClient.get(url);
  },
  logout: () => {
    const url = `auth/logout`;
    return axiosClient.delete(url);
  },
};

export default authApi;
