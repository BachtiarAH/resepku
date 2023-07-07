import { useState } from "react";
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/footer/Footer";

export default function Authenticated({ user, header, children }) {
    const [showingNavigationDropdown, setShowingNavigationDropdown] =
        useState(false);

    return (
        <div className="">
            <Navbar />
            <main className="flex justify-center ">
                <div className="container">{children}</div>
            </main>
            
            <Footer />
        </div>
    );
}
