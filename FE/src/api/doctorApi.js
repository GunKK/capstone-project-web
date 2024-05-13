import axiosUploadFile from "./axiosClient"

const doctorApi = {
    predict: (data) => {
        const url = `doctor/predict`
        console.log(">>>data: ",data);
        return axiosUploadFile.post(url, data)
    },
}

export default doctorApi