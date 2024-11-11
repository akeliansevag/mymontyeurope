export const isValidEmail = (email) => {
    return /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/.test(email);
};

export const isNumeric = (value) => {
    return !isNaN(parseFloat(value)) && isFinite(value);
};

export const isValidLength = (phone) => {
    return /^[0-9]{1,12}$/.test(phone);
};

export const isValidCode = (code) => {
    return /^[1-9][0-9]{0,3}$/.test(code);
};

export const isValidUrl = (url) => {
    if (!url) {
        return true;
    }

    return /^(ftp|http|https):\/\/[^ "]+$/.test(url);
};

export const isSafe = (url) => {
    return !/<(\/|\s)?(_ENV|_SERVER|_HOST|PATH|php|main|br|header|h[1-9]|body|style|script|html|head|p|b|strong|a|i|span|div)?(\/|\s)*>/.test(url);
};

export const fileType = (file, allowedTypesMessage) => {
    const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'text/csv', 'text/plain', 'image/jpeg', 'image/png'];
    return file && allowedTypes.includes(file.type);
};

export const fileSize = (file, maxSizeMessage) => {
    const maxSizeInBytes = 20 * 1024 * 1024; // 20MB
    return file && file.size <= maxSizeInBytes;
};