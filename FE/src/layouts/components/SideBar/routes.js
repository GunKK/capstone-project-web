export const roleEnum = {
  Admin: 1,
  Supervisor: 2,
  Doctor: 3,
  Patient: 4
}

export const routes = [
  {
    title: 'Tổng quan',
    path: '/admin',
    exactly: true,
    permissions: [roleEnum.Doctor, roleEnum.Supervisor, roleEnum.Admin]

  },
  {
    title: 'Khách hàng',
    path: '/admin/Patient',
    permissions: [roleEnum.Doctor, roleEnum.Supervisor, roleEnum.Admin]
  },
  {
    title: 'Nhân viên',
    path: '/admin/Doctor',
    permissions: [roleEnum.Admin]
  },
];