import React from "react";
import { useParams } from "react-router-dom";

const StudentDetail1 = () => {

    const { id } = useParams();
    return (

        <div>
            <h1>User Details of id {id}</h1>
            <h6>Name:SADI</h6>
            <h6>Deptartment: CSE</h6>
            <h6>Contact:01634382877</h6>
        </div>
    )
}
export default StudentDetail1; 