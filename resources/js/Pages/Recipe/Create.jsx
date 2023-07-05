import TextInput from "@/Components/Form/TextInput";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import InputLabel from "@/Components/Form/InputLabel";
import InputError from "@/Components/Form/InputError";
import TextAreaInput from "@/Components/Form/TextAreaInput";
import { useState } from "react";
import AddebleInput from "@/Components/Form/AddelbleInput";
import FileInput from "@/Components/Form/FileInput";
import Button from "@/Components/Button";

function CreateRecipe() {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    

    return (
        <AuthenticatedLayout header={"Tulis Resepmu ..."}>
            <div className="d-flex flex-column mb-8">
                <h4 className="h4 text-default mt-9 mb-6">Tulis Resepmu...</h4>
                <form action="/recipe/create/store" method="post" encType="multipart/form-data">
                    <input type="text" hidden value={csrfToken} name="_token"/>
                    <div className="mt-4">
                        <InputLabel
                            htmlFor="title"
                            value="Title"
                            className="h5"
                        />

                        <TextInput
                            id="title"
                            type="text"
                            name="title"
                            required={true}
                            className="mt-1 block w-full"
                        />
                    </div>

                    <div className="mt-4">
                        <InputLabel
                            htmlFor="description"
                            value="Deskripsi"
                            className="h5"
                        />
                        <TextAreaInput
                            id="description"
                            name="description"
                            required={true}
                        ></TextAreaInput>
                    </div>

                    <div className="mt-4">
                        <InputLabel
                            htmlFor="ingredient"
                            value="Bahan - bahan"
                            className="h5 text-default"
                        />
                        <AddebleInput name="ingredient" label="Bahan" />
                    </div>

                    <div className="mt-4">
                        <InputLabel
                            htmlFor="step"
                            value="Langkah Pembuatan"
                            className="h5 text-default"
                        />
                        <AddebleInput name="step" label="Langkah" />
                    </div>

                    <div className="mt-4">
                        <InputLabel
                            htmlFor="thumbnail"
                            value="Upload Foto Masakan"
                            className="h5 form-label"
                        />

                        <FileInput
                            id="thumbnail"
                            name="thumbnail"
                            className="border p-2 rounded shadow-sm"
                        />
                    </div>

                    <Button
                    type="submit"
                    className=" bg-default"
                    >Terbitkan Resep</Button>
                </form>
            </div>
        </AuthenticatedLayout>
    );
}

export default CreateRecipe;
