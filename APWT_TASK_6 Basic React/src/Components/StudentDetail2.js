import React from "react";
import { useParams } from "react-router-dom";

const StudentDetail2 = () => {

    const { id } = useParams();
    return (

        <div>
            <h1>User Details of id {id}</h1>
            <h1>Name: ROKAN</h1>
            <h1>Deptartment: CSE</h1>
            <h1>Contact:016343823213</h1>
        </div>
    )
}
export default StudentDetail2; 