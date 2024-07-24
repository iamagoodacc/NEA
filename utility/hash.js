export class Hash {

    static async sha256(message) {
        // encode the message as a Uint8Array
        const msgUint8 = new TextEncoder().encode(message);
        
        // hash the message using SHA-256
        const hashBuffer = await crypto.subtle.digest('SHA-256', msgUint8);
        
        // convert the hash to a hexadecimal string
        const hashArray = Array.from(new Uint8Array(hashBuffer));
        const digest = hashArray.map(byte => byte.toString(16).padStart(2, '0')).join('');
        
        return digest; //returning a Promise that needs to be resolved
    }
}