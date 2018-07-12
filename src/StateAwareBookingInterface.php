<?php

namespace RebelCode\Bookings;

use Dhii\Data\StateAwareInterface;

/**
 * Bookings that can expose their current state.
 *
 * @since [*next-version*]
 */
interface StateAwareBookingInterface extends
    BookingInterface,
    StateAwareInterface
{
}
