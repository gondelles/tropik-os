# 07_SECURITY_AND_APPROVAL_POLICY

Status: PRIVATE_CANONICAL  
Version: 1.1

## Never store in general Project Knowledge or Git

- passwords;
- real API keys/tokens;
- private keys/seed phrases;
- payment card/bank credentials;
- full tax identifiers;
- production secrets;
- unnecessary customer personal data;
- confidential customer/client data unrelated to the task.

Use placeholders such as `<WOOCOMMERCE_KEY>` and `<SECRET_MANAGER>`.

## Git security

- Never commit real `.env` secrets.
- Use environment variables/secrets management.
- Review any artifact before public promotion.
- A private repo reduces exposure; it does not make secret storage a good practice.

## Human approval required before

### Money
Inventory, material subscriptions, ad spend, hiring/contracting, material supplier commitments.

### Public/customer-facing
Bulk outreach, external publication under founder/brand where approval is expected, material price/product claim changes.

### Legal/fiscal/compliance
Policy publication/changes, legal/tax/accounting conclusions, regulated claims.

### Production/security
Destructive changes, deletion of business data, sensitive production integrations, credential exposure/rotation, material live checkout/payment changes.

AI may research, draft and stage reversible work, but must mark the gate.
