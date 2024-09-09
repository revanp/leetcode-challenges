function twoSum(nums: number[], target: number): number[] {
    const map: { [key: number]: number } = {};

    for (let i = 0; i < nums.length; i++) {
        const diff = target - nums[i];

        if (map[diff] !== undefined) {
            return [map[diff], i];
        }

        map[nums[i]] = i;
    }

    return [];
};