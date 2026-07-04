# 04 - Database Architecture

*(Skema Konseptual, tabel fisik disesuaikan dengan best practice Laravel Migration)*

## Core Tables

### 1. `users`
- id, name, email, password, role (admin, client, creator), status.

### 2. `creator_profiles`
- id, user_id, location, bio, experience_years, device_used, verification_status, total_rating, total_reviews.

### 3. `packages`
- id, creator_id, name (Basic, Standard, Premium), price, delivery_time, revisions, features (json).

### 4. `bookings`
- id, client_id, creator_id, package_id, booking_date, event_type, location, total_amount, status (pending, paid, in_progress, completed, cancelled, disputed).

### 5. `payments`
- id, booking_id, amount, payment_method, status (unpaid, escrow_held, released, refunded).

### 6. `messages`
- id, sender_id, receiver_id, booking_id (nullable), content, is_flagged (boolean), flagged_reason.

### 7. `reviews`
- id, booking_id, client_id, creator_id, rating (1-5), comment, quality_rating, communication_rating, time_rating.

### 8. `portfolios`
- id, creator_id, video_url, thumbnail_url, views, likes.

### 9. `violations`
- id, user_id, type (bypass_attempt, etc), description, action_taken (warning, suspend).
