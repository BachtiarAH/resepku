export default function ApplicationLogo({className,...props}) {
    return (
        <h1 {...props} className={"h1 flex "+className}>Resepku</h1>
    );
}
