import {
    Pagination,
    PaginationContent,
    PaginationEllipsis,
    PaginationItem,
    PaginationLink,
    PaginationNext,
    PaginationPrevious,
} from '@/components/ui/pagination';
import { PaginationLinks, PaginationMeta} from '@/types';

interface Props {
    items: {
        data: object[];
        links: PaginationLinks;
        meta: PaginationMeta;
    };
}

export default function PaginationPages({ items }: Props) {
    return (
        <Pagination>
            <PaginationContent>
                {items.links.prev && (
                    <PaginationItem>
                        <PaginationPrevious href={items.links.prev} />
                    </PaginationItem>
                )}
                {items.meta.links
                    .filter((link) => link.label !== '&laquo; Previous' && link.label !== 'Next &raquo;')
                    .map((link) => (
                        <PaginationItem key={link.label}>
                            <PaginationLink href={link.url}>{link.label}</PaginationLink>
                        </PaginationItem>
                    ))}
                {items.meta.links.length > 5 && (
                    <PaginationItem>
                        <PaginationEllipsis />
                    </PaginationItem>
                )}
                {items.links.next && (
                    <PaginationItem>
                        <PaginationNext href={items.links.next} />
                    </PaginationItem>
                )}
            </PaginationContent>
        </Pagination>
    );
}
