<?php
declare(strict_types=1);

namespace AstrX\Kernel;

/**
 * A controller that reads the path after its page as positions: a board and
 * a thread number, a username, a content slug.
 *
 * Other pages get their parameters as name/value path segments
 * (/admin-users/edit/5, see AstrX\Routing\PathParameters), which the router
 * turns back into query parameters before the controller runs. For a
 * controller marked with this interface it does not: its segments are left to
 * it, its parameters stay in the query string, and a request with a query
 * string is not redirected to the path form. Link to its pages with
 * UrlGenerator::toPagePath().
 */
interface ReadsPathSegments
{
}
