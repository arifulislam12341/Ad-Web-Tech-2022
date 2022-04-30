import React from "react";
import { useParams } from "react-router-dom";

const StudentDetail3 = () => {

    const { id } = useParams();
    return (

        <div>
            <h1>User Details of id {id}</h1>
            <h6>Name:ALIF</h6>
            <h6>Deptartment: CSE</h6>
            <h6>Contact:01634382387</h6>
        </div>
    )
}
export default StudentDetail3; 