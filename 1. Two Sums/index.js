/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
var twoSum = function(nums, target) {
    const map = {};

    for (let i = 0; i < nums.length; i++) {
        const diff = target - nums[i];

        if (map[diff] !== undefined) {
            return [map[diff], i];
        }

        map[nums[i]] = i;
    }

    return [];
};