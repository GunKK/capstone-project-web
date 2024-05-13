import { useState } from "react";
import styles from "./UploadFile.module.css"
import axiosUploadFile from "../../api/axiosClient";
import doctorApi from "../../api/doctorApi.js"
import axios from "axios";

function UpLoadFile() {
    const [dicomFile, setDicomFile] = useState();

    const handleFileChange = (e) => {
        if (e.target.files) {
            setDicomFile(e.target.files[0]);
        }
    };

    // const handleUpload = async (e) => {
    //     e.preventDefault();
    //     console.log(dicomFile)
    //     let formData = new FormData();
    //     formData.append('dicom_file', dicomFile)
    //     try {
    //         // const res = await axiosUploadFile.post(`doctor/predict`,formData)
    //         const res = await doctorApi.predict(formData);
    //         console.log(">>>res: ",res)
    //     } catch (error) {
    //         console.log(error);
    //     }

    // }

    const handleUpload = (e) => {
        e.preventDefault();
        console.log(dicomFile)

        let formData = new FormData()
        formData.append('dicom_file', dicomFile)
        const url = process.env.REACT_APP_SERVER_URL + 'doctor/predict'
        const config = {
            header: { "Content-Type": "multipart/form-data", }, 
            withCredentials: true
        } 
        axios.post(url, formData, config)
        .then((res) => {
            console.log(res)
        })
        .catch((err) => {
            console.log(err)
        })
    }
    
    return (
        <>
        <div

        >
            <form onSubmit={handleUpload}>
                <label className={styles.formLabel}>File DICOM</label>
                <input 
                    type="file"
                    className={`form-control ${styles.formControl}`}
                    onChange={handleFileChange}
                />
                <button className={`bookstore-btn ${styles.submitBtn}`} >Tải file</button>

            </form>
        </div>
        </>
    )
}

export default UpLoadFile