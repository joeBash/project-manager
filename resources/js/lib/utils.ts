import { type ClassValue, clsx } from 'clsx';
import { twMerge } from 'tailwind-merge';

const Utils = {
    cn(...inputs: ClassValue[]) {
        return twMerge(clsx(inputs));
    },

    toSentenceCase(str?: string) {
        if (!str) {
            return '';
        }

        return str
            .replace('_', ' ')
            .replace('-', ' ')
            .trim()
            .split(' ')
            .map((token) => token.charAt(0).toUpperCase() + token.slice(1))
            .join(' ');
    },
};

export default Utils;
