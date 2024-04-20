import axios from "axios";
import { useEffect, useState } from "react"

function UpLoadFile() {

    const handleUpload = async (e) => {
        e.preventDefault();
        const dicomFile = e.target.files[0];
        let formData = new FormData();
        formData.append('dicom_file', dicomFile)
        const config = {     
            headers: { 'content-type': 'multipart/form-data' }
        }

        try {
            const res = await axios.post('api/v1/doctor/uploadfile', formData, config)
            return res
        } catch (error) {
            console.log(error);
        }
    }
    
    return (
        <>
        <div>
            <form>
            <input 
                type="file"
            />
            <button type="submit" onClick={handleUpload}></button>
            </form>
        </div>
        </>
    )
}

export default UpLoadFile