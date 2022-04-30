import React from "react";
import { useParams } from "react-router-dom";

const StudentDetail1 = () => {

    const { id } = useParams();
    return (

        <div>
            <h1>User Details of id {id}</h1>
            <h1>Name:SADI</h1>
            <h1>Deptartment: CSE</h1>
            <h1>Contact:01634382877</h1>
        </div>
    )
}
export default StudentDetail1; 